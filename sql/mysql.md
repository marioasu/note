mysql
==============

字符串截取
--------------

- left(str, length)
- right(str, length)
- substring(str, pos)
- substring(str, pos, length)
*pos 从1开始计数*

ip地址转换
--------------

- inet_aton(str_ip) 将字符串IP地址转换成32位的网络序列IP地址
- inet_ntoa(num_ip) 反向转换成ASCII表示的IP地址
*num_ip - num_ip % 256 获得IP段的num表示*
