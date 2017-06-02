Data Types
=======
Numbers
-------
int
long - aL(小写l容易与数字1混淆)
float
complex(复数) 用 a+bj 或 complex(a,b) 表示
可以用del删除变量对对象的引用
相关函数
    abs(a)
    max(a...)

Strings
-------
单双引号互相包含时可以不转义
字符串前加r(r'str...') 表示字符串里的内容不转义
三引号中可以包含多行内容
indices(切片) str[a:b]
bytes类型 用b前缀连接字符串 每个字符只占一个字节
str.encode('编码') - 字节表示
str.decode('编码') - 字符
# -*- coding: utf-8 -*-  让python解释器按utf-8编码读取源代码
string.
    replace('a', 'A') - 返回新值，原值不受影响
    lower()

Booleans
-------
True
False
布尔运算 and or not

空值
-------
None

Lists
-------
list.
    append
    insert(index, item)
    pop([index])
    sort() - 排序
range(n) 产生0到n-1的序列 python3中需要用list函数将序列转换成list

Tuples
-------
一旦初始化就不能修改的有序列表 - tuple的每个元素的指向是不变的
定义只含有一个元素的元组时 用,来消除括号的歧义 (item,)

Directories
-------
list里通过遍历查找值 dict里通过索引查找值 dict是无序的
dict.
    get(key[,default]) - 返回None或指定的值
    pop(key) - 返回value
    .values() - 返回值序列

Sets
-------
set是无序集合 不包含重复元素 相对dict set没有存储value
可以通过set方法来从序列获取集合
set.
    add(key)
    remove(key)
& 交集
| 并集

Files
Other core types - Booleans, types, None
Program unit types - Functions, modules, classes
Implementation-related types - Compiled code, stack tracebacks

数据类型判断&转换
-------
type(data) is type
isinstance(data, type/type_tuple) // 可以判断subclass
    types: int str 
    types: int str Iterable Iterator
强制转换 - python3的input函数返回字符串
int(x[,base])
long(x[,base])
float(x)
complex(real[, image)
str(x)
repr(x) - 将对象x转换为表达式字符串
eval(x) - 计算字符串中的有效表达式并返回一个对象
tuple(s) - s表示序列
list(s)
set(s)
dic(d) - d必须是一个(key,value)元组
frozenset(s) - 转换为不可变集合
chr(x) - 整数->字符
unichr(x) - unicode子字符
ord(x)  - 字符->整数
hex(x) - 16进制
oct(x) - 8进制
bool(x)

运算符
=======
/
-------
python3中 / 变成了精确除法 除法的运算结果是浮点数 用 // 表示floor除

%
-------
取余
格式化字符串 %%表示一个普通的%字符

成员运算符
-------
in - 判断key是否在dict中
not in

身份运算符
-------
is - 内存地址相同
is not
id() 函数用于获取对象内存地址

pass
-------
用作空函数和if等的占位

条件判断
=======
elif 是 else if 的缩写

falsy
-------
数字0 空字符串 空list

函数
=======
函数调用是通过栈（stack）这种数据结果实现的
def 声明函数
return 默认返回None
cli中用 from filename import funcname 导入函数
可以用简写的方式返回tuple
普通参数（位置参数）的形参写在前面
参数可以设置默认值 调用时指明默认形参可以跳过之前的默认参数或改变默认参数的顺序
默认参数在定义时被赋值 如果赋值为引用类型 多次调用将保留引用参数的值
可以定义可变参数 *args - 在函数内部 args 接收到一个tuple
    调用时可用*前缀将序列变量打散传入函数中
支持关键字参数 **kw  - 在函数内部 kw 接收到一个dict
    调用时可以用**dict 直接传入dict 此时函数内部获取dict的一个拷贝
使用 命名关键字参数 限制关键字参数的名称 命名关键字参数需要一个特殊分隔符*，*后面的参数被视为命名关键字参数
    如果函数定义中已经有了一个可变参数，后面跟着的命名关键字参数就不再需要一个特殊分隔符*了
    命名关键字参数调用时必须指明参数名称
    命名关键字参数也可以有缺省值
参数顺序 - 必选参数、默认参数、可变参数、命名关键字参数和关键字参数
对于任意函数，都可以通过类似func(*args, **kw)的形式调用它，无论它的参数是如何定义的

语言特性
=======
切片(Slice)
-------
list tuple string 都可以使用切片操作截取部分元素

迭代
-------
from collections import Iterable
isinstance(x, Iterable) - True 表示可迭代的
for value in xxx:
    迭代tuple 和 string
    dict 迭代出key 用dict.values()迭代value
for key,value in xxx:
    迭代 dict.items() 的key和value
    迭代 enumerate(tuple) 的key和value
    [(a,b), (c,d)...]

列表生成式 - List Comprehensions
-------
eg. [k + '=' + v for k, v in d.items()]

生成器 - generator
-------
将生成式的[]改为()就可以得到一个生成器 generator保存的是算法
带yield的generator function也可以得到一个generator
next(g) - 获取generator的下一个元素
generator也是可迭代对象

迭代器 表示一个惰性计算的序列
-------
可以直接作用于for循环的对象统称为可迭代对象：Iterable
可以被next()函数调用并不断返回下一个值的对象称为迭代器：Iterator
可以使用isinstance()判断一个对象是否是Iterator对象
生成器都是Iterator对象
把list、dict、str等Iterable变成Iterator可以使用iter()函数
Iterator的计算是惰性的

Functional Programming
=======
由于Python允许使用变量，因此，Python不是纯函数式编程语言。
高阶函数 - 一个函数可以接收另一个函数作为参数，这种函数就称之为高阶函数

map/reduce
-------
python3 的map返回一个Iterator序列 可以通过list把整个序列都计算出来并返回一个list

模块
=======
os
-------
listdir
