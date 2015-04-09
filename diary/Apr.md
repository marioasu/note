4.2
=========
RIA（Rich Internet Applications）丰富互联网程序，具有高度互动性、丰富用户体验以及功能强大的客户端

4.7
=========
git stash 备份当前工作区内容
git stash pop 恢复
git stash list 列表
git stash clear

解决git for windows GUI中文乱码
----------
etc\gitconfig：　　
　 　[gui]
　　　　encoding = utf-8

4.8
=========
nginx 502 超时
	修改 php-fpm.conf
	request_terminate_timeout = 0s
	service php-fpm reload
	service nginx reload

html5
----------
- 拖放
ondragstart
	event.dataTransfer.setData('Text', event.target.id) // 设置被拖动的数据和类型
ondragover
	event.preventDefault() // 阻止默认处理(默认不能将数据/元素放置到其它元素)
ondrop
	event.preventDefault() // (drop事件的默认行为是以链接形式打开)
	event.dataTransfer.getData('Text') // 获得被拖放的数据

- canvas
	canvas.getContext('2d') // 创建context对象 CanvasRenderingContext2D {textBaseline: "alphabetic", textAlign: "start", font: "10px sans-serif", lineDashOffset: 0, miterLimit: 10…}
	context.fillStyle
	context.fillRect() // 原点为左上角
	context.moveTo()
	context.lineTo()
	context.stroke()

- web worker
	postMessage(i) // 在xx脚本中传回消息
	w = new Worker('xx.js')
	w.onmessage() // 消息事件监听
	w.terminate() // 终止web worker
	web worker 位于外部文件中,所以无法访问window/document/parent对象

js
----------
为了解决从原型对象生成实例的问题，Javascript提供了一个构造函数（Constructor）模式。
所谓"构造函数"，其实就是一个普通函数，但是内部使用了this变量。对构造函数使用new运算符，就能生成实例，并且this变量会绑定在实例对象上。
Prototype模式
Javascript规定，每一个构造函数都有一个prototype属性，指向另一个对象。这个对象的所有属性和方法，都会被构造函数的实例继承。
isPrototypeOf() // 判断，某个proptotype对象和某个实例之间的关系。
hasOwnProperty() // 每个实例对象都有一个hasOwnProperty()方法，用来判断某一个属性到底是本地属性，还是继承自prototype对象的属性。
in运算符 // in运算符可以用来判断，某个实例是否含有某个属性，不管是不是本地属性。

