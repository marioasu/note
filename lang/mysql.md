# user & privilege

## create user

CREATE USER username@'host' IDENTIFIED BY password

_host通配符:%,空密码:''_

## change password
SET PASSWORD FOR username@'host'=PASSWORD(password)
SET PASSWORD=PASSWORD(password)

## delete user
DROP USER username@'host'

## grant privileges

GRANT PRIVILEGES ON database.table TO user@'host' [WITH GRANT OPTION]
DENY/REVOKE PRIVILIGES ON database.table FROM username@'host'
SHOW GRANTS FOR username@'host'

_grant是赋予deny是拒绝revoke是取消_  
_priviliges包括select|insert|update|delete等,逗号分割,all表示全部权限_  
_database和table用*占位,host用%占位并可只占部分网段_
_with grant option让该用户拥有授权的权限_

# data

## import data
mysql -u username -p[password] database < path/to/file
after login: source path/to/file

## explain
Extra
    - Using index 索引覆盖扫描
    - Using where 服务器过滤
    - Using index condition 使用了索引但查询列未全部覆盖

show full processlist 查看mysql连接（线程）状态

# 导入导出成csv格式
select xx from xx into outfile "/xxx/xxx.csv" FIELDS TERMINATED BY "," OPTIONALLY ENCLOSED BY '"' LINES TERMINATED BY "\r\n";
load data infile "/xxx/xxx.csv" into table xx FIELDS TERMINATED BY "," OPTIONALLY ENCLOSED BY '"' LINES TERMINATED BY "\r\n";
