shell commands
==============

gawk
--------------
- gawk [options] '/pattern/ {action}' filename

shell脱离终端在后台运行
-----------------------
- 与终端交互的是前台进程 否者便是后台进程
- 命令后加 & 符号使进程作为job进程提交
- 系统对SIGHUP信号的默认处理是终止收到该信号的进程
- 终端关闭时SIGHUP信号被发送到session首进程及作为job提交的进程
- nohup 表示不挂起 
```
ctrl + z 暂停正在运行的程序
bg 让程序在后台运行（作为job进程）
fg 切换到前台
ctrl + c 结束正在运行的进程
jobs 查看后台进程
nohup command & 让进程在后台运行 即使终端退出也不结束
```
sed
--------------
- sed [options] 'command' flie(s)

df
---------
df -h 查看容量

gzip gunzip
-----------
压缩/解压文件
gzip -c xxx > xxx.gz
gunzip -c xxx.gz > xxx

-c --stdout

tar
---------
tar -vxf xxx.tar
tar -zvxf xxx.tar.gz
tar -jvxf xxx.tar.bz2

vim
--------
ctrl + f 向前翻页
ctrl + b 向后翻页

apache
------------
查看已加载的apache模块
/usr/local/apache/bin/httpd -M


rpm
----------
rpm -ql xxx 查看xxx的安装位置(通过yum安装)

sed
-------
sed [OPTION] {script} [input-file]...
OPTION
    -n, --quiet, --silent 只显示匹配行
    -i, --in-place 直接编辑文件
script
    /匹配行/ 操作
        /匹配行/
            1
            1,n
            2,$
            /pattern/
        操作
            p 显示某行(一般配合-n使用) [/pattern/]p
            a 新增一行或多行
            d 删除某行
            c 代替一行或多行
            s 替换 -- s/要替换的字符串/新的字符串/g

忘记用 root 方式打开文件时的文件保存
-------
:w !sudo tee %

seq
-------
