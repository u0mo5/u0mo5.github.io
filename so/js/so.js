var includeCaption = 1;
var zoomTime = 5;
var zoomSteps = 15;
var fade = 1;
var minBorder = 90;
var myWidth = 0,
    myHeight = 0,
    myScroll = 0;
myScrollWidth = 0;
myScrollHeight = 0;
var zoomOpen = false,
    preloadFrame = 1,
    preloadActive = false,
    preloadTime = 0,
    imgPreload = new Image();
var zoomActive = new Array();
var zoomTimer = new Array();
var zoomOrigW = new Array();
var zoomOrigH = new Array();
var zoomOrigX = new Array();
var zoomOrigY = new Array();
var zoomID = "ZoomBox";
var theID = "ZoomImage";
var theCap = "ZoomCaption";
var theCapDiv = "ZoomCapDiv";

function setupZoom() {
    prepZooms();
    insertZoomHTML();
    zoomdiv = document.getElementById(zoomID);
    zoomimg = document.getElementById(theID)
}

function prepZooms() {
    if (!document.getElementsByTagName) {
        return
    }
    var A = document.getElementsByTagName("a");
    for (i = 0; i < A.length; i++) {
        if (A[i].getAttribute("href") && (A[i].getAttribute("rel"))) {
            if (A[i].getAttribute("rel").indexOf("zoom:") == 0) {
                A[i].onclick = function() {
                    zoomClick(this);
                    return false
                };
                A[i].onmouseover = function() {
                    zoomPreload(this)
                }
            }
        }
    }
}

function zoomPreload(B) {
    var A = B.getAttribute("href");
    if (imgPreload.src.indexOf(B.getAttribute("href").substr(B.getAttribute("href").lastIndexOf("/"))) == -1) {
        preloadActive = true;
        imgPreload = new Image();
        imgPreload.onload = function() {
            preloadActive = false
        };
        imgPreload.src = A
    }
}

function preloadAnimStart() {
    preloadTime = new Date();
    document.getElementById("ZoomSpin").style.left = (myWidth / 2) + "px";
    document.getElementById("ZoomSpin").style.top = ((myHeight / 2) + myScroll) + "px";
    document.getElementById("ZoomSpin").style.visibility = "visible";
    preloadFrame = 1;
    document.getElementById("SpinImage").src = zoomImageURI + "zoom-spin-" + preloadFrame + ".png";
    preloadAnimTimer = setInterval("preloadAnim()", 100)
}

function preloadAnim(A) {
    if (preloadActive != false) {
        document.getElementById("SpinImage").src = zoomImageURI + "zoom-spin-" + preloadFrame + ".png";
        preloadFrame++;
        if (preloadFrame > 12) {
            preloadFrame = 1
        }
    } else {
        document.getElementById("ZoomSpin").style.visibility = "hidden";
        clearInterval(preloadAnimTimer);
        zoomIn(preloadFrom)
    }
}

function zoomClick(A) {
    getSize();
    if (preloadActive == true) {
        preloadFrom = A;
        preloadAnimStart()
    } else {
        zoomIn(A)
    }
}

function zoomIn(A) {
    zoomimg.src = A.getAttribute("href");
    if (A.childNodes[0].width) {
        startW = A.childNodes[0].width;
        startH = A.childNodes[0].height;
        startPos = findElementPos(A.childNodes[0])
    } else {
        startW = 50;
        startH = 12;
        startPos = findElementPos(A)
    }
    hostX = startPos[0];
    hostY = startPos[1];
    if (document.getElementById("scroller")) {
        hostX = hostX - document.getElementById("scroller").scrollLeft
    }
    endW = imgPreload.width;
    endH = imgPreload.height;
    if (zoomActive[theID] != true) {
        document.getElementById("ShadowBox").style.visibility = "hidden";
        document.getElementById("ZoomClose").style.visibility = "hidden";
        if (includeCaption == 1) {
            zoomcap = document.getElementById(theCap);
            zoomcapd = document.getElementById(theCapDiv);
            if (A.getAttribute("title") && includeCaption == 1) {
                zoomcapd.style.display = "block";
                zoomcap.innerHTML = A.getAttribute("title")
            } else {
                zoomcapd.style.display = "none"
            }
        }
        zoomOrigW[theID] = startW;
        zoomOrigH[theID] = startH;
        zoomOrigX[theID] = hostX;
        zoomOrigY[theID] = hostY;
        zoomimg.style.width = startW + "px";
        zoomimg.style.height = startH + "px";
        zoomdiv.style.left = hostX + "px";
        zoomdiv.style.top = hostY + "px";
        if (fade == 1) {
            setOpacity(0, zoomID)
        }
        zoomdiv.style.visibility = "visible";
        sizeRatio = endW / endH;
        if (endW > myWidth - minBorder) {
            endW = myWidth - minBorder;
            endH = endW / sizeRatio
        }
        if (endH > myHeight - minBorder) {
            endH = myHeight - minBorder;
            endW = endH * sizeRatio
        }
        zoomChangeX = ((myWidth / 2) - (endW / 2) - hostX);
        zoomChangeY = (((myHeight / 2) - (endH / 2) - hostY) + myScroll);
        zoomChangeW = (endW - startW);
        zoomChangeH = (endH - startH);
        zoomCurrent = 0;
        if (fade == 1) {
            fadeCurrent = 0;
            fadeAmount = (0 - 100) / zoomSteps
        } else {
            fadeAmount = 0
        }
        zoomTimer[theID] = setInterval("zoomElement('" + zoomID + "', '" + theID + "', " + zoomCurrent + ", " + startW + ", " + zoomChangeW + ", " + startH + ", " + zoomChangeH + ", " + hostX + ", " + zoomChangeX + ", " + hostY + ", " + zoomChangeY + ", " + zoomSteps + ", " + fade + ", " + fadeAmount + ", 'zoomDoneIn(zoomID)')", zoomTime);
        zoomActive[theID] = true
    }
}

function zoomOut() {
    if (zoomActive[theID] != true) {
        document.getElementById("ShadowBox").style.visibility = "hidden";
        document.getElementById("ZoomClose").style.visibility = "hidden";
        startX = parseInt(zoomdiv.style.left);
        startY = parseInt(zoomdiv.style.top);
        startW = zoomimg.width;
        startH = zoomimg.height;
        zoomChangeX = zoomOrigX[theID] - startX;
        zoomChangeY = zoomOrigY[theID] - startY;
        zoomChangeW = zoomOrigW[theID] - startW;
        zoomChangeH = zoomOrigH[theID] - startH;
        zoomCurrent = 0;
        if (fade == 1) {
            fadeCurrent = 0;
            fadeAmount = (100 - 0) / zoomSteps
        } else {
            fadeAmount = 0
        }
        zoomTimer[theID] = setInterval("zoomElement('" + zoomID + "', '" + theID + "', " + zoomCurrent + ", " + startW + ", " + zoomChangeW + ", " + startH + ", " + zoomChangeH + ", " + startX + ", " + zoomChangeX + ", " + startY + ", " + zoomChangeY + ", " + zoomSteps + ", " + fade + ", " + fadeAmount + ", 'zoomDone(zoomID, theID)')", zoomTime);
        zoomActive[theID] = true
    }
}

function zoomDoneIn(A, B) {
    zoomOpen = true;
    setOpacity(0, "ShadowBox");
    setOpacity(0, "ZoomClose");
    A = document.getElementById(A);
    shadowdiv = document.getElementById("ShadowBox");
    shadowLeft = parseInt(A.style.left) - 13;
    shadowTop = parseInt(A.style.top) - 8;
    shadowWidth = A.offsetWidth + 26;
    shadowHeight = A.offsetHeight + 26;
    shadowdiv.style.width = shadowWidth + "px";
    shadowdiv.style.height = shadowHeight + "px";
    shadowdiv.style.left = shadowLeft + "px";
    shadowdiv.style.top = shadowTop + "px";
    document.getElementById("ShadowBox").style.visibility = "visible";
    fadeElementSetup("ShadowBox", 0, 100, 5);
    document.getElementById("ZoomClose").style.visibility = "visible";
    fadeElementSetup("ZoomClose", 0, 100, 5)
}

function zoomDone(A, B) {
    zoomOpen = false;
    zoomOrigH[B] = "";
    zoomOrigW[B] = "";
    document.getElementById(A).style.visibility = "hidden";
    zoomActive[B] == false
}

function zoomElement(zoomdiv, theID, zoomCurrent, zoomStartW, zoomChangeW, zoomStartH, zoomChangeH, zoomStartX, zoomChangeX, zoomStartY, zoomChangeY, zoomSteps, fade, fadeAmount, execWhenDone) {
    if (zoomCurrent == (zoomSteps + 1)) {
        zoomActive[theID] = false;
        clearInterval(zoomTimer[theID]);
        if (execWhenDone != "") {
            eval(execWhenDone)
        }
    } else {
        if (fade != 0) {
            if (fadeAmount < 0) {
                setOpacity(Math.abs(zoomCurrent * fadeAmount), zoomdiv)
            } else {
                setOpacity(100 - (zoomCurrent * fadeAmount), zoomdiv)
            }
        }
        moveW = cubicInOut(zoomCurrent, zoomStartW, zoomChangeW, zoomSteps);
        moveH = cubicInOut(zoomCurrent, zoomStartH, zoomChangeH, zoomSteps);
        moveX = cubicInOut(zoomCurrent, zoomStartX, zoomChangeX, zoomSteps);
        moveY = cubicInOut(zoomCurrent, zoomStartY, zoomChangeY, zoomSteps);
        document.getElementById(zoomdiv).style.left = moveX + "px";
        document.getElementById(zoomdiv).style.top = moveY + "px";
        zoomimg.style.width = moveW + "px";
        zoomimg.style.height = moveH + "px";
        zoomCurrent++;
        clearInterval(zoomTimer[theID]);
        zoomTimer[theID] = setInterval("zoomElement('" + zoomdiv + "', '" + theID + "', " + zoomCurrent + ", " + zoomStartW + ", " + zoomChangeW + ", " + zoomStartH + ", " + zoomChangeH + ", " + zoomStartX + ", " + zoomChangeX + ", " + zoomStartY + ", " + zoomChangeY + ", " + zoomSteps + ", " + fade + ", " + fadeAmount + ", '" + execWhenDone + "')", zoomTime)
    }
}

function zoomMouseOver() {}

function zoomMouseOut() {}

function fadeOut(A) {
    if (A.id) {
        fadeElementSetup(A.id, 100, 0, 10)
    }
}

function fadeIn(A) {
    if (A.id) {
        fadeElementSetup(A.id, 0, 100, 10)
    }
}
var fadeActive = new Array();
var fadeQueue = new Array();
var fadeTimer = new Array();
var fadeClose = new Array();

function fadeElementSetup(C, E, B, A, D) {
    if (fadeActive[C] == true) {
        fadeQueue[C] = new Array(C, E, B, A)
    } else {
        fadeSteps = A;
        fadeCurrent = 0;
        fadeAmount = (E - B) / fadeSteps;
        fadeTimer[C] = setInterval("fadeElement('" + C + "', '" + fadeCurrent + "', '" + fadeAmount + "', '" + fadeSteps + "')", 15);
        fadeActive[C] = true;
        if (D == 1) {
            fadeClose[C] = true
        } else {
            fadeClose[C] = false
        }
    }
}

function fadeElement(B, D, A, C) {
    if (D == C) {
        clearInterval(fadeTimer[B]);
        fadeActive[B] = false;
        if (fadeClose[B] == true) {
            document.getElementById(B).style.visibility = "hidden"
        }
        if (fadeQueue[B] && fadeQueue[B] != false) {
            fadeElementSetup(fadeQueue[B][0], fadeQueue[B][1], fadeQueue[B][2], fadeQueue[B][3]);
            fadeQueue[B] = false
        }
    } else {
        D++;
        if (A < 0) {
            setOpacity(Math.abs(D * A), B)
        } else {
            setOpacity(100 - (D * A), B)
        }
        clearInterval(fadeTimer[B]);
        fadeTimer[B] = setInterval("fadeElement('" + B + "', '" + D + "', '" + A + "', '" + C + "')", 15)
    }
}

function setOpacity(C, A) {
    var B = document.getElementById(A).style;
    if (navigator.userAgent.indexOf("Firefox") != -1) {
        if (C == 100) {
            C = 99.9999
        }
    }
    B.filter = "alpha(opacity=" + C + ")";
    B.opacity = (C / 100)
}

function linear(B, A, D, C) {
    return D * B / C + A
}

function sineInOut(B, A, D, C) {
    return -D / 2 * (Math.cos(Math.PI * B / C) - 1) + A
}

function cubicIn(B, A, D, C) {
    return D * (B /= C) * B * B + A
}

function cubicOut(B, A, D, C) {
    return D * ((B = B / C - 1) * B * B + 1) + A
}

function cubicInOut(B, A, D, C) {
    if ((B /= C / 2) < 1) {
        return D / 2 * B * B * B + A
    }
    return D / 2 * ((B -= 2) * B * B + 2) + A
}

function bounceOut(B, A, D, C) {
    if ((B /= C) < (1 / 2.75)) {
        return D * (7.5625 * B * B) + A
    } else {
        if (B < (2 / 2.75)) {
            return D * (7.5625 * (B -= (1.5 / 2.75)) * B + 0.75) + A
        } else {
            if (B < (2.5 / 2.75)) {
                return D * (7.5625 * (B -= (2.25 / 2.75)) * B + 0.9375) + A
            } else {
                return D * (7.5625 * (B -= (2.625 / 2.75)) * B + 0.984375) + A
            }
        }
    }
}

function getSize() {
    if (document.all) {
        myWidth = (document.documentElement.clientWidth) ? document.documentElement.clientWidth : document.body.clientWidth;
        myHeight = (document.documentElement.clientHeight) ? document.documentElement.clientHeight : document.body.clientHeight;
        myScroll = (document.documentElement.scrollTop) ? document.documentElement.scrollTop : document.body.scrollTop
    } else {
        myWidth = window.innerWidth;
        myHeight = window.innerHeight;
        myScroll = window.pageYOffset
    }
    if (window.innerHeight && window.scrollMaxY) {
        myScrollWidth = document.body.scrollWidth;
        myScrollHeight = window.innerHeight + window.scrollMaxY
    } else {
        if (document.body.scrollHeight > document.body.offsetHeight) {
            myScrollWidth = document.body.scrollWidth;
            myScrollHeight = document.body.scrollHeight
        } else {
            myScrollWidth = document.body.offsetWidth;
            myScrollHeight = document.body.offsetHeight
        }
    }
}

function findElementPos(A) {
    var C = 0;
    var B = 0;
    do {
        C += A.offsetLeft;
        B += A.offsetTop
    } while (A = A.offsetParent);
    return Array(C, B)
}
var
currentSection = "sites-pane";
var tabTag = "-tab";
var paneTag = "-pane";

function ScrollSection(A, B, D) {
    setTimeout(function() {
        try {
            $(A.replace("-pane", "_txt")).focus()
        } catch (E) {}
    }, 100);
    if (currentSection == A) {
        return
    }
    lastSection = currentSection;
    currentSection = A;
    sectionTab = currentSection.split("-")[0] + tabTag;
    document.getElementById(sectionTab).className = "active";
    if (lastSection) {
        try {
            lastTab = lastSection.split("-")[0] + tabTag;
            document.getElementById(lastTab).className = "inactive"
        } catch (C) {}
    }
    theScroll = document.getElementById(B);
    position = findElementPos(document.getElementById(A));
    if (D != "") {
        offsetPos = findElementPos(document.getElementById(D));
        position[0] = position[0] - offsetPos[0]
    }
    scrollStart(theScroll, theScroll.scrollLeft, position[0], "horiz")
}

function ScrollArrow(E, C, D, F) {
    toolbarElem = document.getElementById(C);
    toolbarNames = new Array();
    if (toolbarElem.hasChildNodes()) {
        var B = toolbarElem.childNodes;
        for (var A = 0; A < B.length; A++) {
            if (toolbarElem.childNodes[A].tagName == "LI") {
                toolbarNames.push(toolbarElem.childNodes[A].id.split("-")[0])
            }
        }
    }
    for (var A = 0; A < toolbarNames.length; A++) {
        if (toolbarNames[A] == currentSection.split("-")[0]) {
            if (E == "left") {
                if (A - 1 < 0) {
                    gotoTab = toolbarNames[toolbarNames.length - 1]
                } else {
                    gotoTab = toolbarNames[A - 1]
                }
            } else {
                if ((A + 1) > (toolbarNames.length - 1)) {
                    gotoTab = toolbarNames[0]
                } else {
                    gotoTab = toolbarNames[A + 1]
                }
            }
        }
    }
    ScrollSection(gotoTab + paneTag, D, F)
}
var scrollanim = {
    time: 0,
    begin: 0,
    change: 0,
    duration: 0,
    element: null,
    timer: null
};

function scrollStart(B, D, A, C) {
    if (scrollanim.timer != null) {
        clearInterval(scrollanim.timer);
        scrollanim.timer = null
    }
    scrollanim.time = 0;
    scrollanim.begin = D;
    scrollanim.change = A - D;
    scrollanim.duration = 25;
    scrollanim.element = B;
    if (C == "horiz") {
        scrollanim.timer = setInterval("scrollHorizAnim();", 15)
    } else {
        scrollanim.timer = setInterval("scrollVertAnim();", 15)
    }
}

function scrollVertAnim() {
    if (scrollanim.time > scrollanim.duration) {
        clearInterval(scrollanim.timer);
        scrollanim.timer = null
    } else {
        move = sineInOut(scrollanim.time, scrollanim.begin, scrollanim.change, scrollanim.duration);
        scrollanim.element.scrollTop = move;
        scrollanim.time++
    }
}

function scrollHorizAnim() {
    if (scrollanim.time > scrollanim.duration) {
        clearInterval(scrollanim.timer);
        scrollanim.timer = null
    } else {
        move = sineInOut(scrollanim.time, scrollanim.begin, scrollanim.change, scrollanim.duration);
        scrollanim.element.scrollLeft = move;
        scrollanim.time++
    }
}

function showLargePopup(B) {
    var A = document.getElementById("fullscreen");
    var C = document.getElementById("largepopup");
    document.getElementById("start-download").className = "show";
    getSize();
    A.style.height = myScrollHeight + "px";
    A.style.display = "block";
    C.style.left = ((myWidth - C.offsetWidth) / 2) + "px";
    C.style.top = (((myHeight - C.offsetHeight) / 2) + myScroll) + "px";
    C.style.visibility = "visible";
    refreshTimer = setTimeout("setLocation('" + B.getAttribute("href") + "')", 1500)
}

function setLocation(A) {
    window.location = A
}

function hideLargePopup() {
    var A = document.getElementById("fullscreen");
    var B = document.getElementById("largepopup");
    B.style.visibility = "hidden";
    A.style.display = "none"
}
var dpopTimer = "";

function showDownloadPopup(C) {
    var A = document.getElementById("dpop");
    var B = document.getElementById("download");
    if (moveanim.timer != null) {
        clearInterval(moveanim.timer);
        moveanim.timer = null
    }
    position = findElementPos(B);
    A.style.top = (position[1] - (A.offsetHeight - 40)) + "px";
    A.style.left = "5px";
    if (dpopTimer != "") {
        clearTimeout(dpopTimer);
        dpopTimer = ""
    } else {
        setOpacity(0, "dpop");
        A.style.visibility = "visible";
        moveStart(A, parseInt(A.style.left), parseInt(A.style.left), parseInt(A.style.top) + 10, parseInt(A.style.top), 15);
        fadeElementSetup("dpop", 0, 100, 13)
    }
}

function hideDownloadPopup() {
    dpopTimer = setTimeout("actuallyHide()", 500)
}

function actuallyHide() {
    var A = document.getElementById("dpop");
    if (dpopTimer != "") {
        dpopTimer = "";
        moveStart(A, parseInt(A.style.left), parseInt(A.style.left), parseInt(A.style.top), parseInt(A.style.top) - 10, 15);
        fadeElementSetup("dpop", 100, 0, 13, 1)
    }
}
var moveanim = {
    time: 0,
    beginX: 0,
    changeX: 0,
    beginY: 0,
    changeY: 0,
    duration: 0,
    element: null,
    timer: null
};

function moveStart(E, B, D, A, C, F) {
    if (moveanim.timer != null) {
        clearInterval(moveanim.timer);
        moveanim.timer = null
    }
    moveanim.time = 0;
    moveanim.beginX = B;
    moveanim.changeX = D - B;
    moveanim.beginY = A;
    moveanim.changeY = C - A;
    moveanim.duration = F;
    moveanim.element = E;
    moveanim.timer = setInterval("moveAnimDo();", 15)
}

function moveAnimDo() {
    if (moveanim.time > moveanim.duration) {
        clearInterval(moveanim.timer);
        moveanim.timer = null
    } else {
        moveX = cubicOut(moveanim.time, moveanim.beginX, moveanim.changeX, moveanim.duration);
        moveY = cubicOut(moveanim.time, moveanim.beginY, moveanim.changeY, moveanim.duration);
        moveanim.element.style.left = moveX + "px";
        moveanim.element.style.top = moveY + "px";
        moveanim.time++
    }
}
var $v = function(A) {
    return $(A).value
};
var getXHP = function() {
    var A = "";
    try {
        A = new ActiveXObject("MSXML2.XMLHttp.6.0")
    } catch (B) {
        try {
            A = new ActiveXObject("MSXML2.XMLHttp.5.0")
        } catch (B) {
            try {
                A = new ActiveXObject("MSXML2.XMLHttp.4.0")
            } catch (B) {
                try {
                    A = new ActiveXObject("MSXML2.XMLHttp")
                } catch (B) {
                    try {
                        A = new ActiveXObject("Microsoft.XMLHTTP")
                    } catch (B) {
                        A = new XMLHttpRequest()
                    }
                }
            }
        }
    }
    return A
};
var saveHistorys = function(B) {
    try {
        var A = getXHP();
        A.open("post", "/cmd/saveKeys/?" + B + "&a=" + Math.random(), true);
        A.send("")
    } catch (C) {}
};
var $ = function(A) {
    return document.getElementById(A)
};
var $v = function(A) {
    return $(A).value
};
var G = {};
G.SO = {
    initData: {
web: ["web", "网页", [
["百度", "http://www.baidu.com/s?tn=chnliver_pg&wd={key}"],
["360", "http://www.haosou.com/s?q={key}"],
["必应", "http://cn.bing.com/search?q={key}"],
["有道", "http://www.youdao.com/search?q={key}"],
["搜狗", "http://www.sogou.com/web?query={key}&_ast=1234423248"]]],
widget: ["widget", "软件", [
["百度", "http://rj.baidu.com/search/index/?kw={key}"],
["下载吧", "http://zhannei.baidu.com/cse/search?s=9035802123405734980&entry=1&ie=gbk&q={key}"],
["多特", "http://so.duote.com/cse/search?q={key}&s=1037832334993753959&nsid=1"],
["霏凡", "http://search.crsky.com/search.asp?action=s&sType=ResName&catalog=&keyword={key}"]]],
video: ["video", "视频", [
["百度", "http://video.baidu.com/v?ct=301989888&rn=20&pn=0&db=0&s=7&word={key}"],
["腾讯", "https://v.qq.com/x/search/?q={key}"],
["哔哩", "http://http://search.bilibili.com/all?keyword={key}"],
["优酷", "http://so.youku.com/search_video/q_{key}"],
["土豆", "http://so.tudou.com/isearch.do?kw={key}"],
["有道", "http://video.youdao.com/search?q={key}"],
["搜狗", "http://v.sogou.com/v?query={key}"]]],
mp3: ["mp3", "音乐", [
["百度", "http://mp3.baidu.com/m?tn=baidump3&ct=134217728&hl=zh-CN&ie=utf-8&ei=utf-8&lm=-1&word={key}"],
["虾米", "http://www.xiami.com/search?key={key}"],
["QQ", "https://y.qq.com/portal/search.html#page=1&w={key}"],
["网易", "http://music.163.com/#/search/m/?s={key}&type=1"],
["搜狗", "http://mp3.sogou.com/music.so?&class=1&p=40010200&query={key}"]]],
pic: ["pic", "图片", [
["百度", "http://image.baidu.com/i?tn=baiduimage&ct=201326592&lm=-1&cl=2&word={key}&t=12"],
["360", "http://image.haosou.com/i?q={key}"],
["搜GIF", "http://www.soogif.com/search/{key}"],
["小猪", "http://www.piggif.com/search/{key}"],
["花瓣", "http://huaban.com/search/?q={key}"]]],
buy: ["buy", "购物", [
["淘宝", "https://s.taobao.com/search?q={key}"],
["京东", "http://search.jd.com/Search?keyword={key}&enc=utf-8"]]],
book: ["book", "图书", [
["百度", "http://www.baidu.com/baidu?q1={key}&ft=all"],
["搜狗", "http://www.sogou.com/web?query=filetype%3Aall+{key}&filetype=all"],
["爱问", "http://ishare.iask.sina.com.cn/search.php?key={key}&format="],
["谷歌", "http://books.google.com/books?q={key}{encode}"],
["起点", "http://se.qidian.com/?kw={key}"],
["维基", "https://zh.wikisource.org/zh-hans/{key}"]]],
map: ["map", "地图", [
["百度", "http://map.baidu.com/#word={key}&ct=10&bs=010"],
["谷歌", "http://ditu.google.cn/maps?hl=zh-CN&q={key}"],
["高德", "http://ditu.amap.com/search?query={key}"],
["搜狗", "http://map.sogou.com/index.html#lq={key}"]]],
news: ["news", "资讯", [
["头条", "http://www.toutiao.com"],
["百度", "http://news.baidu.com/ns?cl=2&rn=20&tn=news&word={key}"],
["雅虎", "http://one.cn.yahoo.com/s?p={key}&v=news"],
["有道", "http://news.youdao.com/search?q={key}"],
["搜狗", "http://news.sogou.com/news?query={key}"],
["谷歌", "http://news.google.cn/news?hl=zh-CN&q={key}{encode}"]]],
know: ["know", "知识", [
["百度", "http://zhidao.baidu.com/q?word={key}&ct=17&pn=0&tn=ikaslist&rn=10&lm=0&fr=search"],
["雅虎", "http://one.cn.yahoo.com/s?p={key}&pid=hp&v=ks"],
["新浪", "http://iask.sina.com.cn/search_engine/search_knowledge_engine.php?key={key}&classid=0&x=0&y=0&gjss=0"],
["天涯", "http://wenda.tianya.cn/wenda/search?q={key}{encode}"],
['搜搜', 'http://wenwen.soso.com/z/SearchSolved.e?sp=S{key}&w={key}&search=%E6%90%9C%E7%B4%A2%E7%AD%94%E6%A1%88{encode}']]],
pan: ["pan", "网盘", [
["盘搜", "http://pansou.com/?q={key}"],
["搜盘盘", "http://www.sopanpan.com/search/{key}-0-0.html"],
["盘多多", "http://www.panduoduo.net/s/name/{key}"],
["007", "https://wangpan007.com/share/kw{key}"],
["史莱姆", "http://www.slimego.cn/search.html?q={key}"],
// ["BT搜搜", "http://www.btsoso.xyz/search/{key}_ctime_1.html"],
["磁力福利", "http://cilifuli.cc/{key}/1-0-0.html"],
["磁力吧", "https://www.ciliba.org/s/{key}.html"],
["西林街", "http://www.xilinjie.com/s?q={key}"],
["找尼玛", "http://www.zhaonima.org/magnet/{key}.html"],
["蜘蛛磁力", "http://www.zhizhucili.org/so/{key}-first-asc-1?f=h"],
["逛电驴", "http://verycd.gdajie.com//find.htm?keyword={key}"]]],
code: ["code", "编程", [
["代码搜索", "https://searchcode.com/?q={key}"],
["GitHub", "https://github.com/search?q={key}"],
["推酷", "http://www.tuicool.com/search?kw={key}"],
["CSDN", "http://so.csdn.net/so/search/s.do?q={key}"],
["SegmtFT", "https://segmentfault.com/search?q={key}"],
["StackOF", "http://stackoverflow.com/search?q={key}"],
["Thinkphp", "http://www.thinkphp.cn/Search/?name={key}"],
["Runoob", "http://www.runoob.com/?s={key}"],
["Tool.lu", "http://tool.lu/search/?query={key}"]]]

    },
    init: function() {
        var H = G.SO.initData;

        var D = '<div style="width:100%;text-align:center;"></div><div id=frame><div id=scroller><div id=content>';
        var F = "<div class=soWrap><ul id=toolbar>";
        for (var B in H) {
            try {
                var E = H[B];

                F += "<li" + (B == 0 ? " class=active" : "") + " id=" + E[0] + '-tab><a onfocus="blur();" onclick="ScrollSection(\'' + E[0] + "-pane', 'scroller', '" + H.web[0] + '-pane\'); return false" href="javascript:void(0);">' + E[1] + "</a></li>";

                var A = E[2];
                if (!A) {
                    continue
                }
                D += "<div class=section id=" + E[0] + '-pane><div class="hbi_cont hbi_search"><div class="searchBox"><ul class="searchEngine">';
                for (var C = 0; C < A.length; C++) {
                    D += '<li><a id="' + E[0] + C + '"' + (C == 0 ? ' class="currentEngine"' : "") + ' href="javascript:void(0);" onfocus="blur();" onclick="G.SO.change(\'' + E[0] + "'," + C + ');return false;">' + A[C][0] + "</a></li>"
                }
                D += '</ul><input type="hidden" id="' + E[0] + '_hid" value="' + A[0][1] + '"/><div class="searchCont"><input id="' + E[0] + '_txt" type="text" text="请输入搜索关键字" baiduSug="1" class="text" onkeydown="if(event.keyCode == 13){this.nextSibling.onclick();}" onfocus="this.select();"/><img src="./style/images/search_image.gif" onclick="G.SO.go(\'' + E[0] + "');\"/> <span id=\"alertSpan\" sdstyle=\"font-weight:bold\"></span></div></div></div></div>"
            } catch (I) {
                alert(I)
            }
        }


        F += "</ul></div>";
        D += '</div></div></div>';
        //console.log(F+D);
        $("soContent").innerHTML = F + D;
        //$("soContent").innerHTML = F ;
    },
    //修改ca   by XY  
    ca: {
        web: 0,
        know: 0,
        pic: 0,
        mp3: 0,
        video: 0,
        buy: 0,
        book: 0,
        map: 0,
        news: 0,
        widget: 0,
        pan: 0,
        code: 0
    },
    change: function(C, B) {
        var A = G.SO.ca;
        $(C + "_txt").select();
        $(C + "_hid").value = G.SO.initData[C][2][B][1];
        $(C + "" + A[C]).className = "";
        G.SO.ca[C] = B;
        $(C + "" + B).className = "currentEngine";
        $(C + "_txt").focus()
    },
    go: function(B) {
        var C = $v(B + "_txt");
        saveHistorys("keys=" + encodeURI(C.replace("请输入搜索关键字", "")));
        C = C == "请输入搜索关键字" ? "" : C;
        var A = $v(B + "_hid");
        if (/\{encode\}/.test(A)) {
            A = A.replace(/\{encode\}/, "");
            C = encodeURI(C)
        }
        C = A.replace(/\{key\}/g, C);
        if (B == "widget") {
            C = C.replace(/\{r\}/, ["A", "B", "C", "D", "E", "F", "G"][Math.floor(Math.random() * 5)])
        }
        window.open(C)
    }
};
G.SO.init();

setTimeout(function() {
    ScrollSection("web-pane", "scroller", "pan-pane")
}, 100);