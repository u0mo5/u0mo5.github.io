﻿function mysearch(txt){
        var db = openDatabase('u0mo5', '1.0', 'Test DB', 2 * 1024 * 1024);
        var msg;
        db.transaction(function (context) {
           context.executeSql('SELECT * FROM  link  where title like "%'+ txt +'%" ', [], function (context, results) {
            var len = results.rows.length, i;
            console.log('Got '+len+' rows.');
               for (i = 0; i < len; i++){
              console.log('id: '+results.rows.item(i).id);
              console.log('title: '+results.rows.item(i).title);
              console.log('url: '+results.rows.item(i).url);
            }
         });
        }); 
}		