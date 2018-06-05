/**
 * Created by JnToo on 2018/4/16.
 */
// 数据结构为：
/**
 * {
 *      code:0, // code 大于0为错误，等于0为成功，类似于C写法，大于0为错误码
 *      msg:"" ,// 错误信息 返回的错误信息
 *      data:JSON , // JSON任意信息
 *      href:'', // 跳转地址
 * }
 */

(function (global) {
    var config = {
        baseUrl:'/..',
        loginUrl:'http://127.0.0.1:8080/admin.php?s=/index/login/sign',    // 用以上结构返回
        shortCutUrl:'/static/json/shortcut.json', // 获取线上WIN10图标
        menuCutUrl:'/static/json/menu-item.json'   // 开始菜单Url
    }
    global.win10Config = config;
})(window)
