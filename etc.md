js bindEvent
============
```js
function bindEvent(dom, eventName, fun) {
    if (window.addEventListener) {
        dom.addEventListener(eventName, fun);
    } else {
        dom.attachEvent('on' + eventName, fun);
    }
}
```

字符串转json
=========
var obj = eval('(' + str + ')');
或
var obj = JSON.parse(str); //由JSON字符串转换为JSON对象
var last=JSON.stringify(obj); //将JSON对象转化为JSON字符

格式化时间
===========
function formatTime(time) {
    var date = new Date(time); // 如果time是时间戳，必须为number且为毫秒 (parseInt())
    var month = date.getMonth() + 1 < 10 ? '0' + (date.getMonth() + 1) : date.getMonth() + 1;
    var currentDate = date.getDate() < 10 ? '0' + date.getDate() : date.getDate();
    var hh = date.getHours() < 10 ? '0' + date.getHours() : date.getHours();
    var mm = date.getMinutes() < 10 ? '0' + date.getMinutes() : date.getMinutes();
    var ss = date.getSeconds() < 10 ? '0' + date.getSeconds() : date.getSeconds();
    return date.getFullYear() + '-' + month + '-' + currentDate+' '+ hh + ':' + mm + ':' + ss;
}

Date.parse(); // Date的静态方法，转换指定时间的时间戳(毫秒)

git关联远程仓库
============
git remote add origin https://github.com/try-git/try_git.git
git push -u origin master // The -u tells Git to remember the parameters, so that next time we can simply run git push and Git will know what to do.