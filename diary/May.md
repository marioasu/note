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
