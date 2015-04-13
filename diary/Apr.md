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

4.8 - 4.9
==========
html5
----------
- server-sent event
	HTTP是一个无状态的面向连接的协议，无状态不代表HTTP不能保持TCP连接，更不能代表HTTP使用的是UDP协议（无连接）
	source = new EventSource("xx.php")
	xx.php
		header('Content-Type: text/event-stream'); // Content-Type 报头
		header('Cache-Control: no-cache');
		echo 'data: '.$_SERVER['REQUEST_TIME']."\n\n";
		flush();
	source.onmessage = function(event) {
		console.log(event.data);
	}

js
----------
基于类的语言	类从另一个类继承
js基于原型		类直接从其他对象继承
js通过构造器函数产生对象

4.9
=========
正则表达式
---------
- 原子 最小匹配单元
- 原意文本字符
- 元字符
|	匹配两个或多个分支选项
[]	匹配方括号中的任意一个原子
[^] 匹配除方括号中的原子之外的任意字符
- 原子的集合
.	除换行符之外的任意字符[^\n]
\d	任意十进制数字[0-9]
\D 	任意非十进制数字[^0-9]
\s 	不可见原子[\f\n\r\t\v]
\S 	非不可见原子[^\f\n\r\t\v]
\w 	数字字母下划线[0-9a-zA-Z_]
\W 	非数字字母下划线[^0-9a-zA-Z_]
[\u4e00-\u9fa5]  匹配任意单个汉字（这里用的是 Unicode 编码表示汉字的 )
- 量词
{n}	其前面的原子恰好出现n次
{n,}
{n,m}
*	任意次
+	一或多次{0,}
?	0或1次{0,1}
- 边界控制和模式单元
^	匹配字符串开始的位置
$	匹配字符串结束的位置
()	匹配其中的整体为一个原子
- 修正模式
贪婪匹配	匹配结果存在歧义取其长 默认
懒惰匹配	匹配结果存在歧义取其短 /xx/U

4.13
=========
justwritting nginx 配置
----------------
server {
		listen       80;
		server_name www.justwriting.com;

		root /data/web/www.justwriting.com;
		index index.html index.php;

		# set expiration of assets to MAX for caching
		location ~* \.(ico|css|js|gif|jpe?g|png)(\?[0-9]+)?$ {
			expires max;
			log_not_found off;
		}

		location ~* \.(md)$  { 
		  deny all; 
		}

		location / {
			# Check if a file exists, or route it to index.php.
			try_files $uri $uri/ /index.php$uri?$args;
		}

		location ~* \.php {
			fastcgi_pass 127.0.0.1:9000;
			fastcgi_index index.php;
			fastcgi_split_path_info ^(.+\.php)(/?.*)$;
			fastcgi_param PATH_INFO $fastcgi_path_info;
			include fastcgi_params;
			fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
		}
}

