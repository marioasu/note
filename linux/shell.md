shell commands
==============

gawk
--------------
- gawk [options] '/pattern/ {action}'

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
nohup command & 让进程在后台运行 即使终端推出也不结束
```
