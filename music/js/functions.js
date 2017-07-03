var __, __cb_download;(function(w){
var __ = {
    data: { url: 'http://music.baidu.com', timeout: null, key: '', id: 0, list: {}, album: {}, artist:{}, artist_list:{}, download: {}, lrc: {} },

    param: function(hash){
        return hash.replace('#\/', '').split('\/');
    },

    get_url: function(type, data){
        var urls = {
                base: 'http://tingapi.ting.baidu.com/v1/restserver/ting', 
                sug: 'http://sug.music.baidu.com/info/suggestion', 
                album: 'http://music.baidu.com/data/music/box/album', 
                download: 'http://music.baidu.com/data/music/fmlink'};
        var param = [];
        for (var key in data) {
            param.push( key +'='+ data[key] );
        }; 
        return  urls[type] + '?' + param.join('&');
    },

    get_data: function(action, param){
        var me = this;

        param._t = (new Date()).getTime();
        param.format = param.format ? param.format : 'json';
        param.callback = param.callback ? param.callback : ('__.cb_'+action);

        switch(action){
            case 'search':
                //param.method = 'baidu.ting.search.catalogSug';
                //me.data.key = encodeURI( param.query );
                //url = me.get_url('base', param); 
                param.version = 2;
                param.from = 0;
                me.data.key = encodeURI( param.word );
                url = me.get_url('sug', param); 
                break;

            case 'download':
                url = me.get_url(action, param);
                var __key = param.songIds + '_' + (param.type=='flac,mp3' ? 'flac' : 'mp3');
                if ( me.data.download[__key] ) { 
                    return me.cb_download( me.data.download[__key], true ); 
                }
                break;

            case 'lrc':
                param.method = 'baidu.ting.song.lry';
                url = me.get_url('base', param);
                me.id = param.songid;
                if ( me.data.lrc[param.songid] ) { 
                    return me.cb_lrc( me.data.lrc[param.songid], true ); 
                }
                break;

            case 'artist':
                param.method = 'baidu.ting.artist.getInfo';
                url = me.get_url('base', param);
                if ( me.data.artist[param.tinguid] ) { 
                    return me.cb_artist( me.data.artist[param.tinguid], true ); 
                }
                break;

            case 'artist_list':
                param.method = 'baidu.ting.artist.getSongList';
                url = me.get_url('base', param);
                if ( me.data.artist_list[param.tinguid] ) { 
                    return me.cb_artist_list( me.data.artist_list[param.tinguid], true ); 
                }
                break;

            default:
                param.method = 'baidu.ting.billboard.billList';
                url = me.get_url('base', param);
                if ( me.data.list[param.type] ) { 
                    return me.cb_list( me.data.list[param.type], true ); 
                }
        }
        me.notice(10001);
        return $.getScript(url);
    },

    win: function(title, html, windows){
        var _w = $('#winModal');
        _w.removeClass('fade');
        _w.find('.modal-dialog').addClass('modal-sm');
        if (windows) {
            _w.addClass('fade');
            _w.find('.modal-dialog').removeClass('modal-sm');
        } 
        _w.find('.modal-title').html(title);
        _w.find('.modal-body').html(html);
        _w.modal('show');
    },

    donate: function(){
        this.win('捐 赠：', '<div class="text-center"><div><img height="256px" width="256px" src="https://t.alipayobjects.com/images/mobilecodec/T17_FBXdRbXXXXXXXX" alt="alipay" /></div><div class="alert alert-info">ALIPAY:u0mo5@qq.com</div></div>', true);
    },
 
    notice: function(code){
        var msg = {
            10001: '数据加载中，请稍后。。。',
            10002: '请输入关键词！',
            10091: '没有找到相关结果！',
            10092: '数据加载超时，请重试！',
            10099: '未知错误，请稍后再试！'
        }
        this.win('提示：', '<div class="alert alert-danger">'+msg[code]+'</div>');
    },

    notice_timeout: function(){
        var me = this;
        me.timeout = setTimeout(function(){
            me.notice(10092);
        }, 30000);
    },

    notice_cls: function(){
        clearTimeout(this.timeout);
        $('#winModal').modal('hide');
    },

    cb_download: function(d, isset){
        var me = this;
        var fsize = function(size){
            if (size > 1*1024*1024*1024) {
                return Math.ceil(size*100/(1024*1024*1024))/100 + ' GB';
            };

            if (size > 1*1024*1024) {
                return Math.ceil(size*100/(1024*1024))/100 + ' MB';
            };

            if (size > 1*1024) {
                return Math.ceil(size*100/(1024))/100 + ' KB';
            };
            return size + ' B';
        };
        try{
            if (d.errorCode==22000) {
                me.notice_cls();

                var item = d.data.songList[0];
                if (!isset) {
                    me.data.download[ item.songId +'_'+ (item.format=='flac' ? 'flac': 'mp3') ] = d;
                }

                me.win('下 载：', '<h4>'+ item.songName +'  <small><i class="glyphicon glyphicon-cloud-download"></i> '+ item.artistName +' '+ fsize(item['size']) +' / '+ item.format +' / '+ item.rate +'kbps </small></h4>\
                    <div class="alert alert-warning">因百度防盗链设置，若点击后不能下载，请直接复制链接地址下载。</div>\
                    <pre class="alert alert-success"><span class="label label-success">下载地址</span> <a href="'+ item.songLink +'" rel="noreferrer">'+ item.songLink +'</a></pre>\
                    <pre class="alert alert-info"><span class="label label-info">歌词</span> <a href="'+ me.data.url + item.lrcLink +'" target="_blank">'+ me.data.url + item.lrcLink +'</a></pre>', true);
            }
        }catch(e){ me.notice(10099); }
    },

    cb_lrc: function(d, isset){
        var me = this;
        try{
            me.notice_cls();
            if(d.error_code && d.error_code!=22000){ 
                return me.notice(10091);
            }

            if (!isset) {
                me.data.lrc[ me.id ] = d;
            }

            me.win('《'+ d.title +'》歌词：', '<pre class="alert">'+ d.lrcContent +'</pre>', true);

        }catch(e){ me.notice(10099); }
    },

    cb_list: function(d, isset){
        var me = this;
        try{
            if (d.error_code==22000) {
                me.notice_cls();
                if (!isset) {
                    me.data.list[d.billboard.billboard_type] = d;
                }
                
                $('#data_item .data_header').html( d.billboard.name + ' <small><span class="text-muted">更新时间：'+ d.billboard.update_date +'</span></small>' );
                $('#data_item .data_summary').html( d.billboard.comment );

                var list = d.song_list;
                $('#data_list').html('<div class="list-group data_list_song"><div class="list-group-item">\
                    <div class="row">\
                        <span class="col-sm-1">No.</span>\
                        <span class="col-sm-4">歌曲名称</span>\
                        <span class="col-sm-3">歌手</span>\
                        <span class="col-sm-2">专辑</span>\
                        <span class="col-sm-2">下载</span>\
                    </div></div></div>');

                for (var i = 0; i < list.length; i++) {
                    var _item = list[i];

                    //下载列表
                    var _download = '<a href="#/lrc/'+ _item.song_id+'" class="btn btn-primary btn-xs act_btn_lrc">LRC</a> <a href="#/download/'+ _item.song_id+'/320" class="btn btn-primary btn-xs act_btn_download">MP3</a>';
                    var _rate = (_item.all_rate=='' ? '320' : _item.all_rate).split(',');
                    if ( _rate.pop()=='flac' ) {
                        _download += ' <a href="#/download/'+ _item.song_id+'/flac" class="btn btn-primary btn-xs act_btn_download">FLAC</a>';
                    }

                    //歌手列表
                    var _artist = [];
                    var _artist_list = {id: _item.all_artist_ting_uid.split(','), name: _item.author.split(',') };
                    for (var j = 0; j < _artist_list.id.length; j++) {
                        _artist.push('<a class="act_btn_artist" href="#/artist/'+ _artist_list.id[j] +'">'+ _artist_list.name[j] +'</a>');
                    };

                    $('#data_list .data_list_song').append('<div class="list-group-item">\
                            <div class="row">\
                                <span class="col-sm-1">'+ (i+1)+'</span>\
                                <span class="col-sm-4">'+ _item.title +'</span>\
                                <span class="col-sm-3">'+ _artist.join(', ') +'</span>\
                                <span class="col-sm-2">'+ (_item.album_title=='' ? '' : '《'+ _item.album_title +'》') +'</span>\
                                <span class="col-sm-2">'+ _download +'</span>\
                            </div></div>');
                }

                me.bind_artist();
                me.bind_download();
                me.bind_lrc();

            };
        }catch(e){ me.notice(10099); }
    },

    cb_artist: function(d, isset){
        var me = this;
        try{
            me.notice_cls();
            if(d.error_code && d.error_code!=22000){ 
                return me.notice(10091);
            }
            if (!isset) {
                me.data.artist[ d.ting_uid ] = d;
            };
            me.get_data('artist_list', {tinguid: d.ting_uid, limits: 100 });
            
            $('#data_item .data_header').html( d.name + ' <small class="text-muted">专辑数：'+ d.albums_total +'，歌曲数：'+ d.songs_total +' （只显示部分歌曲）</span>' );
            $('#data_item .data_summary').html( '<blockquote style="font-size:10px">' + d.intro + '</blockquote>' );

        }catch(e){ me.notice(10099); }
    },

    cb_artist_list: function(d, isset){
        var me = this;
        try{
            if (d.error_code==22000) {
                me.notice_cls();
                if (!isset) {
                    me.data.artist_list[ d.songlist[0].ting_uid ] = d;
                };
                var list = d.songlist;
                $('#data_list').html('<div class="list-group data_list_song"><div class="list-group-item">\
                    <div class="row">\
                        <span class="col-sm-1">No.</span>\
                        <span class="col-sm-4">歌曲名称</span>\
                        <span class="col-sm-3">歌手</span>\
                        <span class="col-sm-2">专辑</span>\
                        <span class="col-sm-2">下载</span>\
                    </div></div></div>');

                for (var i = 0; i < list.length; i++) {
                    var _item = list[i];

                    //下载列表
                    var _download = '<a href="#/lrc/'+ _item.song_id+'" class="btn btn-primary btn-xs act_btn_lrc">LRC</a> <a href="#/download/'+ _item.song_id+'/320" class="btn btn-primary btn-xs act_btn_download">MP3</a>';
                    var _rate = (_item.all_rate=='' ? '320' : _item.all_rate).split(',');
                    if ( _rate.pop()=='flac' ) {
                        _download += ' <a href="#/download/'+ _item.song_id+'/flac" class="btn btn-primary btn-xs act_btn_download">FLAC</a>';
                    }

                    //歌手列表
                    var _artist = [];
                    var _artist_list = {id: _item.all_artist_ting_uid.split(','), name: _item.author.split(',') };
                    for (var j = 0; j < _artist_list.id.length; j++) {
                        _artist.push('<a class="act_btn_artist" href="#/artist/'+ _artist_list.id[j] +'">'+ _artist_list.name[j] +'</a>');
                    };

                    $('#data_list .data_list_song').append('<div class="list-group-item">\
                            <div class="row">\
                                <span class="col-sm-1">'+ (i+1)+'</span>\
                                <span class="col-sm-4">'+ _item.title +'</span>\
                                <span class="col-sm-3">'+ _artist.join(', ') +'</span>\
                                <span class="col-sm-2">'+ (_item.album_title=='' ? '' : '《'+ _item.album_title +'》') +'</span>\
                                <span class="col-sm-2">'+ _download +'</span>\
                            </div></div>');
                }

                me.bind_artist();
                me.bind_download();
                me.bind_lrc();
            };
        }catch(e){ me.notice(10099); }
    },

    cb_search: function(d){
        var me = this;
        try{
            // if (d.error_code==22000) {

            // };
                var d = d.data; //sug

                me.notice_cls();

                var list_song = d.song;
                var list_artist = d.artist;
                if (list_song.length==0 && list_artist.length==0) {
                    return me.notice(10091);
                };

                _param = me.param( location.hash );
                var key = decodeURI(_param[1]);
    
                $('#data_item .data_header').html( '关键词 <span class="bg-primary">'+ key + '</span> 的搜索结果 <small class="text-muted">歌曲：'+ d.song.length +'，歌手数：'+ d.artist.length +'</span>' );
                $('#data_item .data_summary').html('');

                $('#data_list').html('<div class="row">\
                    <div class="col-sm-6 col-xs-12"><ul class="list-group data_list_song"><li class="list-group-item active">歌曲：</li></ul></div>\
                    <div class="col-sm-6 col-xs-12"><div class="list-group data_list_artist"><a href="javascript:;" class="list-group-item active">歌手：</a></div></div></div>');

                //song list
                for (var i = 0; i < list_song.length; i++) {
                    var _item = list_song[i];
                    $('#data_list .data_list_song').append('<li class="list-group-item">'+ _item.songname +' - '+ _item.artistname +' <a href="#/download/'+ _item.songid+'/flac" class="badge act_btn_download" title="高清无损音质">FLAC</a> <a href="#/download/'+ _item.songid+'/320" class="badge act_btn_download">MP3</a> <a href="#/lrc/'+ _item.songid+'" class="badge act_btn_lrc">LRC</a></li>');
                }

                //artist list
                for (var i = 0; i < list_artist.length; i++) {
                    var _item = list_artist[i];
                    $('#data_list .data_list_artist').append('<a href="#/artist/'+ _item.artistid+'" class="list-group-item act_btn_artist">' + _item.artistname +'</a>');
                }

                me.bind_artist();
                me.bind_download();
                me.bind_lrc();
        }catch(e){ me.notice(10099); }
    },

    bind_artist: function(){
        var me = this;
        $('#data_list .act_btn_artist').on('click', function(){
            var _param = me.param( $(this).attr('href') );
            var _id = _param[1];
            me.get_data('artist', {tinguid: _id});
        }); 
    },

    bind_lrc: function(){
        var me = this;
        $('#data_list .act_btn_lrc').on('click', function(){
            var _param = me.param( $(this).attr('href') );
            var _id = _param[1];
            me.get_data('lrc', {songid: _id});
        }); 
    },

    bind_download: function(){
        var me = this;
        $('#data_list .act_btn_download').on('click', function(){
            var _param = me.param( $(this).attr('href') );
            var _songid = _param[1];
            var _rate = _param[2];

            var _type = '';
            if ( _rate == 'flac' ) { 
                _type = 'flac,mp3';
                _rate = '320'
            }
            me.get_data('download', {songIds: _songid, rate: _rate, type: _type});
        });
    },

    init_search: function(){
        var me = this;
        $('#act_btn_search').on('click', function(){
            var key = $('#in_keywords').val();
            if (key=='') { 
                return me.notice(10002);
            }
            key = encodeURI(key);
            location.hash = '#/search/'+key;
            //me.get_data('search', {query: key});
            me.get_data('search', {word: key});
        })
    },

    init_donate: function(){
        var me = this;
        $('#act_btn_donate').on('click', function(){
            me.donate();
        })
    },

    init_list: function(){
        var me = this;
        var list =[ 
                [1, '新歌榜'], [2, '热歌榜'], [0, ''],
                [21, '欧美金曲榜'], [22, '经典老歌榜'], [23, '情歌对唱榜'], [24, '影视金曲榜'], [25, '网络歌曲榜'] 
            ];

        $('#act_btn_list').append('<ul class="dropdown-menu" role="menu"></ul>');

        for (var i = 0; i < list.length; i++) {
            var item = list[i]; 
            var li = '<li><a href="#/list/'+ item[0] +'">'+ item[1] +'</a></li>';
            if (item[0]==0) {
                li = '<li class="divider"></li>';
            };
            $('#act_btn_list .dropdown-menu').append(li);
        };

        //绑定click事件
        $('#act_btn_list .dropdown-menu a').on('click', function(){
            var _param = me.param( $(this).attr('href') );
            me.get_data('list', {size: 100, type: _param[1]});
        });
    },

    router: function(){
        var me = this;
        var _param = me.param( location.hash );
        var action = 'list';
        if ( _param[0] ) {
            action = _param[0];
        };

        switch(action){
            case 'donate':
                me.donate();
                break;
            case 'search':
                var _key = _param[1] ? _param[1] : '';
                me.get_data('search', {word: _key});
                //me.get_data('search', {query: _key});
                break;
            case 'artist':
                var _id = _param[1] ? _param[1] : '';
                me.get_data('artist', {tinguid: _id});
                break;
            case 'lrc':
                var _id = _param[1] ? _param[1] : '';
                me.get_data('lrc', {songid: _id});
                break;
            case 'download':
                var _songid = _param[1] ? _param[1] : '';
                var _rate = _param[2] ? _param[2] : '320';
                var _type = '';
                if ( _rate == 'flac' ) { 
                    _type = 'flac,mp3';
                    _rate = '320'
                }
                me.get_data('download', {songIds: _songid, rate: _rate, type: _type});
                break;
            default:
                var _id = _param[1] ? _param[1] : '1';
                location.hash = '#/list/'+_id;
                me.get_data('list', {size: 100, type: _id});
                break;
        }
    },

    init: function(){
        this.init_donate();
        this.init_search();
        this.init_list();
        this.router();
    }
};__.init(); w.__ = __; 
w.__cb_download = function(d, isset){ return __.cb_download(d, isset); };
})(window);