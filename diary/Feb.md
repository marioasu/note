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

2.10
========
git
--------
git 在添加了远程库之后
	git push -u origin master // 由于远程库是空的，我们第一次推送master分支时，加上了-u参数，Git不但会把本地的master分支内容推送的远程新的master分支，还会把本地的master分支和远程的master分支关联起来，在以后的推送或者拉取时就可以简化命令

2.12
========
Framework7 // 一个手机前端web框架

linux
---------
chkconfig命令主要用来更新（启动或停止）和查询系统服务的运行级信息。谨记chkconfig不是立即自动禁止或激活一个服务，它只是简单的改变了符号连接
	chkconfig --level httpd 2345 on        #设置httpd在运行级别为2、3、4、5的情况下都是on（开启）的状态

crond
--------
crontab  命令是用户用于建立计划任务的命令是/usr/bin/crontab
-u       root用户帮助其它用户建立
-e       编辑crontab内容
-l       查年crontab内容
-r       删除crontab内容

记住几个特殊符号的含义:
         "*"代表取值范围内的数字,
         "/"代表"每",
         "-"代表从某个数字到某个数字,
         ","分开几个离散的数字

新增调度任务可用两种方法：
         1、在命令行输入: crontab -e 然后添加相应的任务，wq存盘退出。
         2、直接编辑/etc/crontab 文件，即vi /etc/crontab，添加相应的任务。

crond命令每分锺会定期检查是否有要执行的工作，如果有要执行的工作便会自动执行该工作
两种方式改变服务状态 start/stop/restart/reload
	/sbin/service crond restart
	/etc/init.d/crond restart
run-parts dir 执行dir下的可执行文件

微信api
--------
jsapi_ticket
	生成签名之前必须先了解一下jsapi_ticket，jsapi_ticket是公众号用于调用微信JS接口的临时票据。正常情况下，jsapi_ticket的有效期为7200秒，通过access_token来获取。由于获取jsapi_ticket的api调用次数非常有限，频繁刷新jsapi_ticket会导致api调用受限，影响自身业务，开发者必须在自己的服务全局缓存jsapi_ticket

2.13
=======
git
------
git commit -am "xxx" // git add 和 git commit -m "xxx" 合为一步(没添加新文件时适用)
git commit -h // 查看提交帮助

2.18
=======
processon 	www.processon.com // 在线流程图和思维导图