redis
=========
db
---------
select 0~15
flushdb

字符串(Strings)
---------------
set
get
strlen
getrange xx:xxx indexfrom indexto
append xx:xxx 'ssss'
incr incrby
decr decrby

散列(Hashes) - 使用域作二级索引查用户信息
--------------
hset
hget
hmset
hmget
hgetall
hkeys
hdel

列表(Lists)
-------------
lpush
ltrim
lrange

集合(Sets) - 好友集合
--------------
sadd
sismember
sinter - 交集
sinterstore

分类集合(Sorted Sets)
---------------------
zadd
zcount
zrevrank
