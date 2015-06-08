5.14
========
清除本地DNS缓存	cmd > ipconfig/flushdns

5.19
============
js
--------
调用不存在的变量会报错 xxx is not defined
调用对象中不存在的元素 返回 undefined

function字面量的构造器是Function...
构造器产生的函数对象的原型里存放了构造器本身
	this.prototype = {constructor: this...};
可以通过替换构造器的原型为其它对象实现对其它对象的继承
	原型上找构造器->找到对象->找到对象的构造器
一个函数可以叫做伪类 因为new这个函数可以产生一个对象
这种继承没有私有环境,无法访问父类方法,如果调用伪类忘记加new关键字,伪类里的this将被绑定到全局对象上

字面量的构造器是 function Function() { [native code] }
由于Function是顶层的构造器,在Function的原型上加的方法对所有对象都有效
	在 this.prototype.__proto__ 里面

5.26
========
php
--------
命令行模式
	php -r 'xxx' // 直接运行(run)php代码
	php -a // 进入交互(interactive) 模式
ini_set('html_errors', false); // 设置不加html标签的错误输出

linux
---------
curl 提交数据
curl -d xxx...  // 'CONTENT_TYPE' => string 'application/x-www-form-urlencoded' 
curl -F(--form) xxx... // 'CONTENT_TYPE' => string 'multipart/form-data; boundary=----------------------------edcdabe557d8'
服务端 接收到post请求

5.27
动态语言，是指程序在运行时可以改变其结构：新的函数可以被引进，已有的函数可以被删除等在结构上的变化。// eg. js
