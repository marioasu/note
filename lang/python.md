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
    split(delimiter[, times]) -> list
    strip([chars])
    startswith

Booleans
-------
True
False
布尔运算 and or not

空值
-------
None
函数的默认返回值

Lists
-------
mylist[index] - 取值
list.
    append
    insert(index, item)
    pop([index])
    sort() - 排序
range(n) 产生0到n-1的序列 python3中需要用list函数将序列转换成list(生成器，同python2中的xrange)
列表的赋值语句不会创建一份副本。你必须使用切片操作来生成一份序列的副本(浅复制)

Tuples
-------
一旦初始化就不能修改的有序列表 - tuple的每个元素的指向是不变的
定义只含有一个元素的元组时 用,来消除括号的歧义 (item,)

Dictionary
-------
mydic[key] - 取值
list里通过遍历查找值 dict里通过索引查找值 dict是无序的
dict.
    [key] 获取值 key不存在时会抛出 KeyError
    [key] = xxx 赋值
    get(key[,default]) - 返回None或指定的值
    setdefault(key, value)
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
Other core types - types, None
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

深/浅拷贝
-------
浅拷贝 - 只对变量本身拷贝到新地址然后赋值
深拷贝 - 把变量内的非常量都拷贝到新地址并赋值
产生浅拷贝的操作
    切片[:]
    使用工厂函数（如list/dir/set）
    使用copy模块中的copy()函数

数据结构
=======
序列类型
-------
容器序列 - list tuple collections.deque
----
存放任意类型的对象的引用（地址）

扁平序列 - str bytes bytearray memoryview array.array
----
只能容纳一种数据类型
存放值

可变序列(MutableSequence) - list bytearray array.array collection.deque memoryview
----

不可变序列(Sequence) - tuple str bytes
----

列表推导(list comprehension | listcomps) - 构建list的快捷方式
----
只用列表推导来创建新的列表，并且尽量保持简短

生成器表达式(generator expression | genexps) - 可以用来创建任何类型的序列
----

元组(tuple)
----
不可变的列表
没有字段名的记录
for循环拆包（unpacking）元组，_作无用元素的占位符
= 平行赋值 拆包 # 左值中可用*前缀来处理剩下的元素
% 字符串格式化拆包
元组拆包可应用到任何可迭代对象上 - 可迭代元素拆包
* 把一个可迭代对象拆开作为函数参数
具名元组 collections.namedtuple(类名, 可迭代对象|空格隔开的字段名字符串) # 工厂函数 - 给记录中的字段命名
    专有属性：
        _fileds类属性
        _make(iterable)类方法
        _asdict()实例方法 -> collections.OrderedDict

对序列使用+和*
-------
序列中的元素是其它可变对象的引用的话（如由列表组成的列表） *操作，产生的复制指向同一个地址

替换列表的数据类型（某些情况下更高效）
-------
数组 array.array
----
只包含数字的列表
tofile(fp)
frombytes(fp, len)

映射对象 - 字典和集合
-------
标准库里的所有映射类型都是通过dict来实现的，因此它们有一个共同的限制 - 只有可散列的数据类型才能用作这些映射里的键

字典推导 dictcomp
----
类似列表推导 使用{}

映射类型
----
dict
--
setdefault

collections.defaultdict
--
setdefault
default_factory 在 __getitem__ -> __missing__ 函数中被调用的函数（实际是一个可调用对象,在defaultdict初始化时由用户设定），用以给未找到的元素设置值

collections.OrderedDict
--
setdefault

构造方法
--
Python里大多数映射类型都可以用一个映射对象或一个包含了(key, value)元素的可迭代对象来初始化

UserDict -> MutableMapping -> Mapping
-------
MutableMapping.update - 被 __init__ 调用， 因为这个方法在背后是用self[key] = value来添加新值，所以它其实是在使用 __setitem__ 方法
Mapping.get
    try:
        return self[key]
    except KeyError:
        return default

运算符
=======
/
-------
python3中 / 变成了精确除法 除法的运算结果是浮点数 用 // 表示floor除

行连接
-------
\ 可用于将字符串拆分成多个物理行 - 显式行连接
以（大中小）括号开始但不是结束括号时，行连接可以省略 \ 符号（续行符） - 隐式行连接

%
-------
取余
格式化字符串 %%表示一个普通的%字符

成员运算符
-------
in - 判断key是否在dict中 | 元素是否在list中
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
函数调用是通过栈（stack）这种数据结构实现的
def 声明函数
return 默认返回None
cli中用 from filename import funcname 导入函数
可以用简写的方式返回tuple # return a, b
普通参数（位置参数）的形参写在前面
参数可以设置默认值 调用时指明默认形参名可以跳过之前的默认参数或改变默认参数的顺序
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
函数对象有个__name__属性，可以拿到函数的名字

闭包 - closure 程序结构
-------
def count():
    fs = []
    for i in range(1,5):
        def f(j):
            #def ff():
                #return j*j
            #return ff;
            return lambda :j*j;
        fs.append(f(i))
    return fs
返回闭包时牢记的一点就是：返回函数不要引用任何循环变量，或者后续会发生变化的变量。

装饰器 - Decorator # 在代码运行期间动态增加功能
-------
接收一个函数作为参数并返回一个函数

functools.partial - 偏函数
------
作用就是，把一个函数的某些参数给固定住（也就是设置默认值），返回一个新的函数，调用这个新函数会更简单
max2 = functools.partial(max, 10)
int2 = functools.partial(int, base=2)
定义偏函数时接收可变参数相当于把默认参数加到参数元祖的左边，接收命名关键字参数相当于固定某关键字参数

包/模块
-------
import module - 获得指向模块的module变量
if __name__=='__main__':  -  在命令行运行时当前文件的__name__变量会被置为__main__
__doc__ 变量可以访问文档注释
包管理工具pip - 安装第三方模块
环境变量PYTHONPATH 添加模块搜索路径
包 - 指一个包含模块与一个特殊的 __init__.py 文件的文件夹

内置函数
-------
sorted(list[,key=func|,reserve=boolean])
len -- 实际调用对象内部的 __len__ 方法
hasattr/getattr/setattr 操作属性
reversed -- 反转序列
ord -- 返回字符的Unicode编号
chr -- 返回Unicode编号的字符表示
divmod(a, b) -- 返回元组 (商, 余数)

OOP
-------
构造方法 __init__  # __new__ is the method called before __init__
    __new__     creates the object and returns it
    __init__    initializes the object passed as parameter
私有变量 __var - 将变量私有并提供set方法可以检查参数、避免传入无效的参数 # 实质是转换成了_Classname.__var
Python的“file-like object“就是一种鸭子类型 - 任何实现了read()方法的对象
type(123) == int # True
type(fn) == types.FunctionType
                  BuiltinFunctionType
                  LambdaType
                  GeneratorType
isinstance(var, 基本类型|类|父继承链上的类|类型元组)
dir函数返回一个对象的所有属性和方法
类属性和实例属性
    - 实例属性会覆盖类属性(通过实例名访问的时候)
    - 类属性可以被属于该类的所有实例访问,该类变量只拥有一个副本,当任何一个对象对类变量作出改变时,发生的变动将在其它所有实例中都会得到体现
    - eg. Robot.popluation self.__class__.population
types.MethodType 可以给实例动态添加方法 给Classname.func赋值可直接给类添加方法(对所有实例生效)
__slots__
    用于限制class可以定义的属性 - 用tuple赋值
    仅对当前类的实例生效，子类不受影响
    如果子类也定义了__slots__ 那么子类允许定义的属性是父类slots和子类slots的合集
@property
    将方法变成属性调用
    @property本身会创建装饰器func.setter
    如果使用了@property而不定义setter方法，那么这个属性为只读属性
多重继承 - MixIn
定制类
    len函数访问对象的__len__方法
    print函数访问对象的__str__方法并打印返回值
    命令行直接输入变量Enter 输出的是__repr__方法的返回值
    使用__iter__方法返回迭代器对象 用于for ... in循环遍历
    __getitem__ 用于按下标取元素 [] 使中可传入切片 需要单独处理 - 用[]取值其实是调用的__getitem__方法 # 字典用(key)取值
    __setitem__ __delitem__
    __contains__ 被 in运算符 调用
    归功于 duck type 不需要强制实现某个接口
    __getattr__ 访问不存在的属性时调用 (类似php的魔术方法__get)
    __call__ 直接调用对象实例 其实是调用对象内部的__call__方法
        这就模糊了对象和函数的界限 - 他们都可以被调用
        callable函数判断对象是否能被调用
    迭代通常是隐式的,譬如说一个集合类型没有实现 __contains__ 方法,那么 in 运算符就会按顺序做一次迭代搜索
枚举类 - 枚举常量
    from enum import Enum,unique
    for name, member in Weekday.__members__.items(): 遍历枚举 member.value 为成员的值
原类 - metaclass
    type 函数可以查看对象的类型 - 类的类型为type 对象的类型为Package.classname
    type 函数还可以创建类，参数:
        class的名称
        继承的父类集合，注意Python支持多重继承，如果只有一个父类，别忘了tuple的单元素写法
        class的方法名称与函数绑定
    动态语言本身支持运行期动态创建类
    __new__
    __bases__ 对象的父类
    __class__ 对象是属于哪个生的
    类是元类的实例，而实例对象是类的实例

错误(异常)处理
=======
try ... except ...(else...) finally ...
如果错误没有被捕获，它就会一直往上抛，最后被Python解释器捕获，打印一个错误信息，然后程序退出
raise 抛出错误实例
    ValueError
    TypeError
    IOError
    FileNotFoundError
断言 - assert
    assert expression, 'info ...' # 如果断言失败，assert语句本身就会抛出AssertionError
    python解释器可以用-O参数关闭assert
pdb调试器
    python3 -m pdb xxx.py
        l/n/p varname/q
    import pdb 然后使用pdb.set_trace()在代码中设置断点
        c 继续执行
单元测试／文档测试

IO编程
=======
同步IO和异步IO - 区别在于是否等待IO的执行结果
异步IO的编程模型复杂 - 回调模式 | 轮询模式
操作IO的能力都是由操作系统提供的，每一种编程语言都会把操作系统提供的低级C接口封装起来方便使用

文件读写
-------
open -> 打开一个文件对象（通常称为文件描述符）
    encoding=
    errors='ignore'
read([size]) -> str对象
readline # line.strip() - 删掉末尾的'\n'
readlines -> list
write
close
try... finally... close # python 引入with语句来自动调用close - with open as f:
open返回的这种有read方法的对象，在python中统称为file-like Object 可以是文件、内存字节流、网络流、自定义流、StringIO

StringIO
-------
在内存中读写str
getvalue

BytesIO
-------
内存中操作二进制数据

序列化 - pickling(serialization,marshalling,flattening)
-------
反序列化 unpickling
pickle 模块
    dumps -> bytes
    dump(obj, file-like obj)
    loads // 反序列化
    load(file-like obj)

JSON - 标准的js对象
-------
None -> null
json 模块
    dumps -> str
        default参数 # 转换函数 default=lambda obj: obj.__dict__
        定义了__slots__的class没有__dict__属性
    dump
    loads
        object_hook参数 # 转换函数 将反序列化的内容转换成对象
    load

进程和线程
-------
python支持多进程和多线程
多进程和多线程涉及同步、数据共享等问题
Unix／Linux系统提供了fork()系统调用，调用一次，返回两次。分别在主进程和复制出来的子进程返回 父进程返回子进程的id 子进程返回0
python的os模块封装了常见的系统调用
multiprocessing模块可实现跨平台的多进程
多线程和多进程最大的不同在于，多进程中，同一个变量，各自有一份拷贝存在于每个进程中，互不影响，而多线程中，所有变量都由所有线程共享，所以，任何一个变量都可以被任何一个线程修改，因此，线程之间共享数据最大的危险在于多个线程同时改一个变量，把内容给改乱了。
现代操作系统对IO操作已经做了巨大的改进，最大的特点就是支持异步IO
对应到Python语言，单线程的异步编程模型称为协程，有了协程的支持，就可以基于事件驱动编写高效的多任务程序。 # 使用异步IO可以执行基于IO的多任务，基于CPU计算的多任务执行不了

异步编程
-------
异步编程的一个原则：一旦决定使用异步，则系统每一层都必须是异步，“开弓没有回头箭”
基于asyncio的aiohttp，是基于协程的异步模型。在协程中，不能调用普通的同步IO操作
aiomysql为MySQL数据库提供了异步IO的驱动

正则表达式
=======
直接给出字符，就是精确匹配
\d可以匹配一个数字
\w可以匹配一个字母或数字
.可以匹配任意字符
\s可以匹配一个空格（也包括Tab等空白符）
'-'是特殊字符，在正则表达式中，要用'\'转义
可以用[]表示范围
A|B可以匹配A或B
^表示行的开头
$表示行的结束
数目：
*表示任意个字符（包括0个）
+表示至少一个字符
?表示0个或1个字符
{n}表示n个字符
{n,m}表示n-m个字符

re模块
-------
match()方法判断是否匹配，如果匹配成功，返回一个Match对象，否则返回None
    .group(index) 提取匹配对象
    .groups() -> tuple index从1开始的匹配对象
split 比字符串提供的split（用固定的字符分割）更灵活 -> list
\d+? - 非贪婪匹配数字 # 当后面的表达式符合时就让后面的表达式匹配
re.compile('xxx') 预编译正则表达式

web开发
=======
实现WSGI处理函数 - 带 environ 和 start_response 两个参数
返回bytes list

environ
-------
PATH_INFO
REQUEST_METHOD
    GET/POST...

web框架
-------
完成url到函数的映射

start_response
-------
参数为状态码和头信息list

语言特性
=======
切片(Slice)
-------
list tuple string 都可以使用切片操作截取部分元素
l[:] 左闭右开区间 可以省略开始和结尾 可以是负数
    切片和区间(range)忽略后一个元素的好处：可以快速看出或计算出切片和区间里有几个元素；方便用任一下边将序列切分成不重叠的两部分 my_list[:x] 和 my_list[x:]
extended slice l[a:b:step] 第三个元素表示步长 步长可以为负数 a、b的区间方向要和步长的正负一致
seq[start:stop:step] - seq.__getitem__(slice(start, stop, step))

x or y # or运算符可能会返回x或者y本身的值

magic method # 一般只有Python解释器会频繁地直接调用这些方法
-------
__init__
----

__repr__
----

__str__
----
被 str() 和 print() 函数调用 # 如果一个对象没有 __str__ 函数，而Python又需要调用它的时候，解释器会用 __repr__ 作为替代

__abs__
----
被 abs() 函数调用

__add__(self, other)
----
被算术运算符 + 调用 （运算符重载？）

__iadd__
----
+=(就地加法) a+=b类似a.extend(b) 如果类没有实现这个方法 Python会退一步调用__add__

__mul__(self, other/scalar)
----
被算术运算符 * 调用
中缀运算符的基本原则就是不改变操作对象

__bool__
----
被 bool() 函数调用，如果不存在 __bool__ 方法，那么 bool(x) 会尝试调用 x.__len__() 若返回0，则 bool 会返回 False；否则返回 True

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
生成器都是Iterator对象

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

filter
-------
过滤序列

模块
=======
sys
-------
argv

os
-------
name
uname
environ
    get
path
    abspath
    join
    split -> tuple
    splitext
    isdir
listdir
rename
remove

shutil - os模块的补充
-------
copyfile

io
-------
StringIO
BytesIO

listdir
functools
    reduce
    wraps
time
    time
enum
    Enum
logging
    DEBUG|INFO|WARNING|ERROR
    basicConfig
        level=xxx
    Exception
    info
unittest
    TestCase
re
    search
    findall -> list

from datetime
-------
import datetime # 引入datetime模块的datetime类
----
datetime
    now -> datetime对象
    fromtimestamp
    utcfromtimestamp
    strptime(str, format)
    utcnow 当前的UTC时间
datetime对象
    timestamp -> float
    strftime(format)
    astimezone(timezone(timedelta(hours=8)))

import timedelta # timedelta类用于datetime的加减
----
now + timedelta(days=2, hours=12)

import timezone
----
tz_utc_8 = timezone(timedelta(hours=8)) # 创建时区UTC+8:00
now.replace(tzinfo=tz_utc_8) # 强制设置为UTC+8:00

from collections # collections是Python内建的一个集合模块，提供了许多有用的集合类
-------
import namedtuple # 方便地创建tuple的子类
----
Point = namedtuple('Point', ['x', 'y'])
p = Point(1, 2)
p.x #1 p.y #2
isinstance(p, tuple) # true

import deque # deque是为了高效实现插入和删除操作的双向列表，适合用于队列和栈
----
appendleft
popleft

import defaultdict # 可以定义key不存在时dict的默认值
----
dd = defaultdict(lambda: 'N/A')

import OrderedDict # 有序的dict
----

import Counter # 简单的计数器
-------

struct
-------
pack
unpack

hashlib
-------

itertools
-------

requests
-------
get
    params
post
    data
    headers
    timeout
head
delete
options

r.
    status_code
    headers
    cookies

urllib # urllib提供了一系列用于操作URL的功能
-------
urllib.request.urlretrieve(pic_url, path) # 下载url到地址

pip3
=======
mysql-connector-python-rf
aiohttp

内建模块 build-in module
=======
collections
-------
namedtuple(typename, field_names[, verbose=False][, rename=False]) - 返回一个名为typename的tuple子类

random
-------
choice(seq) - 从非空序列中随机取一个元素并返回

math
hypot(x, y) - 模 sqrt(x*x + y*y) 原点到 point(x, y) 的长度 斜边长度

bisect - 二分法
-------
bisect - bisect_right 的别名
insort - insort_right 的别名
