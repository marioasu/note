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
_database和table用*占位,host用%站位并可只占部分网段_
_with grant option让该用户拥有授权的权限_
