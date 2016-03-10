redis
=========
db
---------
select 0~15
flushdb

字符串(Strings / string)
---------------
set
get
strlen
getrange xx:xxx indexfrom indexto
append xx:xxx 'ssss'
incr incrby incrbyfloat
decr decrby

散列(Hashes / hash) - 使用域作二级索引查用户信息 - (字典、压缩列表)
--------------
hset
hget
hmset
hmget
hgetall
hkeys
hdel

列表(Lists / list) - (链表、压缩列表)
-------------
lpush
ltrim
lrange

集合(Sets / set) - 好友集合 - (整数集合)
--------------
sadd
sismember
sinter - 交集
sinterstore

有序集合(Sorted Sets / zset) - (跳跃表)
---------------------
zadd
zcount
zrevrank


#2016-03-01
============
redis中的每个键值对都是由对象组成
	键总是字符串对象
	值可以是 字符串、列表、哈希、集合、有序集合 这5种对象中的一种
	type命令 返回数据库键对应的值对象类型
	object encoding 查看一个数据库键的值对象的编码
	exists 判断键值对是否存在

select 切换数据库
flushdb 清空数据库

redis中的每个对象都由一个redisObject结构表示
typedef struct redisObject {
	// 类型
	unsigned type: 4;
	// 编码
	unsigned encoding: 4;
	// 指向底层实现数据结构的指针
	void *ptr;
	// ...
} robj;
