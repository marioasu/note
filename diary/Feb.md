2.2
=======
(?)
-------
路由glob形式
依赖注入

other
--------
内联元素又名行内元素(inline element)，和其对应的是块元素(block element)，都是html规范中的概念

js
-------
<a href="#" onclick="self.location=document.referrer;">back</a> // 返回导航到当前网页的超链接所在网页的URL

php
-------
heredoc
<<<EOT
xxx
EOT;
结尾定界符必须顶格独占一行,分号结束
定界符习惯用EOT EOF // end of tape,end of file

2.3
========
Windows系统用户请按Win+R运行cmd，输入systeminfo后回车，稍等片刻，会出现一些系统信息
Linux系统用户可通过在Terminal中执行命令arch(即uname -m)来查看系统信息
AMD64，又称“x86-64”或“x64”，是一种64位元的电脑处理器架构。它是建基于现有32位元的x86架构，由AMD公司所开发

2.4
=======
linux
-------
whereis // 查看shell位置 eg: whereis go
环境变量
	set添加 unset清除 export临时添加
	修改/etc/profile 或者用户目录下(只对该用户有效)的.bash_profile (加入export PATH=$PATH:xxx) source执行使其立即生效

git
------
长期储存https密码
	git config --global credential.helper store
	或者改变url 	http://yourname:password@git.oschina.net/name/project.git

正则
-------
/^[a-zA-Z0-9_\x{4e00}-\x{9fa5}]{2,10}$/u   // 匹配字母数字下划线汉字
	u ：unicode 的缩写，表示待匹配的串是一个符合 unicode 编码规则的串，比如 utf-88编码的串在 u 修饰符下，一个汉字被当做一个字符被处理

2.5
=======
GET请求的URL限制
	Microsoft Internet Explorer has a maximum uniform resource locator (URL) length of 2,083 characters. Internet Explorer also has a maximum path length of 2,048 characters. This limit applies to both POST request and GET request URLs. 

2.6
=======
manifest 应用程序缓存
<html manifest="demo.appcache">
分三部分
	CACHE MANIFEST - 在此标题下列出的文件将在首次下载后进行缓存
	NETWORK: - 在此标题下列出的文件需要与服务器的连接，且不会被缓存
	FALLBACK:- 在此标题下列出的文件规定当页面无法访问时的回退页面（比如 404 页面）
重要的提示：以 "#" 开头的是注释行，但也可满足其他用途。应用的缓存会在其 manifest 文件更改时被更新。如果您编辑了一幅图片，或者修改了一个 JavaScript 函数，这些改变都不会被重新缓存。更新注释行中的日期和版本号是一种使浏览器重新缓存文件的办法
注释：浏览器对缓存数据的容量限制可能不太一样（某些浏览器设置的限制是每个站点 5MB）

mysql
------
desc TableName // 查看表结构

2.8
======
ThinkPHP多层MVC
模型(Model)层 // Model/Logic/Service 数据/逻辑/服务
视图(View)层 // 通过目录区分主题、移动端和web端
控制器(Controller)层 // Controller/Event 访问控制器/事件控制器

2.9
========
git
-----
git config --global core.autocrlf false // 禁止自动转换换行符

Fielding将他对互联网软件的架构原则，定名为REST，即Representational State Transfer的缩写。我对这个词组的翻译是"表现层状态转化"