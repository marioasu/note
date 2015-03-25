3.2
=========
h5 离线app
----------
- Application Cache 的实际操作 // 应用缓存
- Local Storage 和 Web SQL的用法
- 一个离线的Web App框架

Application Cache // 应用缓存
	Manifest文件 全部更新才有效,一次更新,下次生效
Local Storage & Session Storage // 键值对存储 DOM存储
Web SQL // 关系数据库
IndexDB // 键值对数据库
IOS对离线Web App支持最好
	可以在主屏幕上添加图标
	可以全屏浏览

bootstrap
----------
水平表单
水平表单与其他表单不仅标记的数量上不同，而且表单的呈现形式也不同。如需创建一个水平布局的表单，请按下面的几个步骤进行：
	向父 <form> 元素添加 class .form-horizontal。
	把标签和控件放在一个带有 class .form-group 的 <div> 中。
	向标签添加 class .control-label。
	安装完成后请修改 tnsnames.ora 文件中用中文标识的三处.

3.4
==========
对称加密 // 采用单钥密码系统的加密方法，同一个密钥可以同时用作信息的加密和解密，这种加密方法称为对称加密，也称为单密钥加密。

3.5
===========
中国金融认证中心（China Financial Certification Authority，简称CFCA）是经中国人民银行和国家信息安全管理机构批准成立的国家级权威安全认证机构，是国家重要的金融信息安全基础设施之一。在《中华人民共和国电子签名法》颁布后，CFCA成为首批获得电子认证服务许可的电子认证服务机构。

3.6
===========
wap网站，即WAP(Wireless Application Protocol)是无线应用协议的缩写，一种实现移动电话与互联网结合的应用协议标准。

3.12
==========
js
----------
原型链中封装trim方法
String.prototype.trim = function() {
	return this.replace(/(^\s*)|(\s*$)/g, ''),; // 去除字符串前后空格
}

3.13
=========
book
---------
JavaScript Design Patterns
Design patterns are reusable solutions to commonly occurring problems in software design. 

3.15
=========
lrzsz 上传和下载文件

python easy setup
------------------
https://bootstrap.pypa.io/ez_setup.py

3.16
=========
MySQL-python 安装
------------------
vim site.cfg 把 mysql_config = /usr/local/mysql/bin/mysql_config 这一行前的#去掉，并且把mysql_config的路径设置正确
python setup.py build
sudo python setup.py install
	yum install gcc python-devel // 如果出现错误提示：command 'gcc' failed with exit status 1
测试
    运行： python
    import MySQLdb
    如果没有报错，说明安装好了
    ln -s /usr/local/mysql/lib/libmysqlclient.so.18 /usr/lib64/libmysqlclient.so.18 // ImportError: libmysqlclient.so.18: cannot open shared object file: No such file or directory

3.17
=======
 - windows上安装MongoDB3.0
 - 安装GoSublime/SidebarEnhancements/Go Build  // Ctrl + b 打开控制台

3.19
========
签名分析
	防止请求被篡改(可以被抓取,但无法被篡改)
	明文传秘钥容易被抓包获取
	服务器对服务器请求常用

3.24
==========
数据库模式定义语言DDL(Data Definition Language)