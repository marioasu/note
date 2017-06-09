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
    split(delimiter, times) -> list
    strip([chars])
    startWith

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

内置函数
-------
sorted(list[key=func|reserve=boolean])
len -- 实际调用对象内部的 __len__ 方法
hasattr/getattr/setattr 操作属性

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
类属性和实例属性 - 实例属性会覆盖类属性
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
    归功于 duck type 不需要强制实现某个接口
    __getattr__ 访问不存在的属性时调用 (类似php的魔术方法__get)
    __call__ 直接调用对象实例 其实是调用对象内部的__call__方法
        这就模糊了对象和函数的界限 - 他们都可以被调用
        callable函数判断对象是否能被调用
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
断言 - assert
    assert expression, 'info ...' # 如果断言失败，assert语句本身就会抛出AssertionError
    python解释器可以用-O参数关闭assert
pdb调试器
    python3 -m pdb xxx.py
        l/n/p varname/q
    import pdb 然后使用pdb.set_trace()在代码中设置断点
        c 继续执行

语言特性
=======
切片(Slice)
-------
list tuple string 都可以使用切片操作截取部分元素
l[:] 左闭右开区间 可以省略开始和结尾 可以是负数
extended slice l[a:b:step] 第三个元素表示步长 步长可以为负数 a、b的区间方向要和步长的正负一致

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
os
-------
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