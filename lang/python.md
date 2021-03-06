在编译时检查类型的语言是静态类型语言,在运行时检查类型的语言是动态类型语言
如果一门语言很少隐式转换类型,说明它是强类型语言;如果经常这么做,说明它是弱类型语言
Python 是动态强类型语言

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
numbers.integral 是 int 的虚拟（抽象）超类 - 抽象基类(Abstract Base Class，ABC)
numbers.Real 实数的抽象超类

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
# coding: utf-8 也可以
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
    keys() - 返回视图序列

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
--
MutableMapping.update - 被 __init__ 调用， 因为这个方法在背后是用self[key] = value来添加新值，所以它其实是在使用 __setitem__ 方法
Mapping.get
    try:
        return self[key]
    except KeyError:
        return default

不可变映射类型
--
types.MappingProxyType

集合 - set
--
集合的本质是许多唯一对象的聚集，因此，集合可用于去重
集合中的元素必须是可散列的
set类型本身不可散列，但是frozenset可以
集合实现了很多基础的中缀运算符
    a | b -- 合集 a.union(b)
    a |= b -- a.update(b)
    a & b -- 交集 a.intersection(b)
    a &= b -- a.intersection_update(b)
    a - b -- 差集 a.diffrence(b)
    a -= b -- a.diffrence_update(b)
    a ^ b -- 对称差集 a.symmetric_diffrence(b)
    a ^= b -- a.symmetric_diffrence_update(b)
中缀运算符要求两侧的被操作对象都是集合对象，但其它的所有方法则只要求传入的参数是可迭代对象
空集 set() - 不能用字面量表示 -- {} 表示空字典
Python里没有针对frozenset的字面量句法，所以frozenset只能通过构造方法创建
集合推导
    类似字典推导

字典中的散列表
-------
散列表其实是一个稀疏数组
往字典里添加新键有可能会改变已有键的顺序， 所以不要在迭代的过程中对字典进行修改
Python3中 .keys() .items() .values() 方法返回的都是字典视图

文本(字符序列)和字节序列(二进制序列)
=======
一个字符串是一个字符序列
从Python3的str对象中获取的元素是Unicode字符
字符标识（码位） A -> U+0041
编码是在码位和字节序列之间转换时使用的算法 A(U+0041) -> \x41 (单字节)
把码位转换成字节序列的过程是编码，反过来为解码

bytes
-------
字面量以b开头 - 可能有ASCII字符、转义序列、十六进制转义序列三种显示方式 # b'The string' - bytes type should only contain ASCII characters
bytes(str, encoding='utf-8') - 以 utf-8 编码从str对象构建bytes
    可通过可迭代对象构造
    可通过实现了缓冲协议的对象(bytes,bytesarray,memoryview,array.array)构造
bytearray - 可变字节序列

结构体(struct)和内存视图(memoryview)
-------
memoryview 用于共享内存 无需复制

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
----
每个变量都有标识、类型和值。对象一旦创建，它的标识绝不会变，is运算符比较两个对象的标识

id() 函数用于获取对象内存地址（对象标识的整数标识）

pass
-------
用作空函数和if等的占位

运算符重载
-------
遵守运算符的基本规则: 始终返回一个新对象
__abs__ | __neg__ | __pos__ | __invert__
序列应该支持+运算符(用于拼接)和*运算符(用于重复复制)
捕获 TypeError return NotImplemented 让第二个操作数类型还有机会执行计算(反向方法) # 如果反向方法也返回 NotImplemented ，Python会抛出 TypeError

条件判断
=======
elif 是 else if 的缩写

falsy
-------
数字0
空字符串 空list 空dict - __len__() == 0

函数
=======
函数调用是通过栈（stack）这种数据结构实现的
def 声明函数
return 默认返回None
cli中用 from filename import funcname 导入函数
可以用简写的方式返回tuple # return a, b
普通参数（位置参数）的形参写在前面
参数可以设置默认值
   不要使用可变类型作为参数的默认值 - 不同实例会使用同一份默认值，类似类属性
   默认值在定义函数时计算（通常在加载模块时）
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

把函数视作对象
-------
function类的实例

高阶函数 - high-order-function 接受函数为参数或把函数作为结果返回的函数
-------
函数式编程的特点之一是使用高阶函数
高阶函数： map、filter、reduce...
Python3中 列表推导具有map和filter的功能，reduce函数被放入functools模块里了，这个函数最常用于求和
reduce - 思想是把某个操作连续应用到序列的元素上，累计之前的结果，把一系列值规约成一个值

匿名函数
-------
用 lambda 关键字创建
定义体只能使用纯表达式，所以多作为参数传递给高阶函数
lambda 句法只是语法糖:与 def 语句一样,lambda 表达式会创建函数对象。这是Python 中几种可调用对象的一种

可调用对象
-------
() - 调用运算符
callable() - 判断对象能否调用
7种可调用对象：
    用户定义的函数
    内置函数
    内置方法
    方法
    类 - __init__
    类的实例 - __call__
    生成器函数

闭包 - closure 程序结构
-------
Python函数在有局部变量a时会取局部变量a的值，而无视局部变量a的声明时机，只有在没有局部变量a时才会从全局变量中获取全局变量a
Python3中引入了 nonlocal 声明，作用是将变量标记为自由变量
保有内部状态的函数 | 延伸了作用域的函数（其中包含了在函数定义体中引用，但不在定义体中定义的非全局变量）
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

定位参数和仅限关键字参数(keyword-only argument)
-------
调用函数时可使用*和**展开可迭代对象，映射到单个参数

装饰器 - Decorator # 在代码运行期间动态增加功能
-------
可调用对象，参数是被装饰的函数，在被装饰函数定义后立即执行，返回函数/可调用对象
严格来说，装饰器其实是语法糖
Python不支持重载方法或函数

内置装饰器函数
-------
property
----
classmethod
----
定义操作类而不是操作实例的方法，第一个参数是cls而不是self
常见用途是定义备选构造方法
staticmethod
----
与classmethod的区别是它的第一个参数不是特殊值
其实，静态方法就是普通函数，只是碰巧在类的定义体中，而不是在模块层定义

标准库中的装饰器
-------
functools.lru_cache([maxsize=128][, typed=False]) - Least Recently Used
----
其实是装饰器的工厂函数，调用产生装饰器函数
作用：保存函数结果
lru_cache 使用字典存储结果（key根据调用时传入的定位参数和关键字参数创建） 所以它的所有参数必须是可散列的

functools.singledispatch - 单分派泛函数(generic function)
----
@singledispatch 标记处理object类型的基函数
各个专门函数使用 @<<base_function>>.register(<<type>>) 装饰
专门函数的名称无关紧要，可以使用_
可以叠放多个register装饰器，让同一个函数支持不同类型

使用一等函数实现设计模式
-------
将单方法类替换成 函数/可调用对象 实现

策略模式
----
Order(上下文) - Promotion(策略)
                    FidelityPromo(具体策略)
                    BulkItemPromo(具体策略)
                    LargeOrderPromo(具体策略)

functools.partial - 偏函数 用于冻结参数
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
sorted(list[,key=func|,reverse=boolean])
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
私有变量 __var - 将变量私有并提供set方法可以检查参数、避免传入无效的参数 # 实质是转换成了 _Classname.__var 存入 __dict__ 属性中 - 名称改写(name mangling)
    名称改写是一种安全措施，目的是避免意外访问，不能防止故意做错事
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
    __contains__ in 判断 - 没有 __contains__ 方法时Python会尝试使用 __getitem__ 方法
    使用__iter__方法返回迭代器对象 用于for ... in循环遍历 用于拆包 - 当没有 __iter__ 方法时，Python会用 __getitem__方法迭代(后备机制)
    -- 鉴于序列协议的重要性,如果没有 __iter__ 和 __contains__ 方法,Python 会调用 __getitem__ 方法,设法让迭代和 in 运算符可用
    __getitem__ 用于按下标取元素 [] 使中可传入切片 需要单独处理 - 用[]取值其实是调用的__getitem__方法 # 字典用(key)取值
    __setitem__ __delitem__
    __contains__ 被 in运算符 调用
    归功于 duck type 不需要强制实现某个接口
    __getattr__ 访问不存在的属性时调用 (类似php的魔术方法__get)
    __call__ 直接调用对象实例 其实是调用对象内部的__call__方法
        这就模糊了对象和函数的界限 - 他们都可以被调用
        callable函数判断对象是否能被调用
    __dict__ 属性 - 存储用户属性
    __closure__ - 闭包中包含自由变量的cell对象序列
    __eq__ - 比较两个对象，结果相等（==运算符） -> True/False
    __defaults__ - 函数的默认值
    迭代通常是隐式的,譬如说一个集合类型没有实现 __contains__ 方法,那么 in 运算符就会按顺序做一次迭代搜索
    __mro__ - 方法解析顺序 Method Resolution Order
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

面向对象惯用法
=======
Python变量：变量是标注，而不是盒子

del和垃圾回收
-------
del语句删除名称，而不是对象

Python控制台会自动把_变量绑定到结果不为None的表达式结果上
对 += 或 *= 所做的增量赋值来说,如果左边的变量绑定的是不可变对象,会创建新对象;如果是可变对象,会就地修改

符合Python风格的对象
=======
得益于Python的数据模型，可以通过鸭子类型(duck typing)，按照预定行为实现对象所需方法，使得自定义类型可以像内置类型那样自然

对象表示形式
-------
repr() - 以便于开发者理解的方式返回对象的字符串表示形式
str() - 以便于用户理解的方式返回对象的字符串表示形式
    特殊方法 __repr__ 和 __str__
其它表示形式
    __bytes__ - bytes() 函数调用它获取对象字节序列表示形式
    __format__ - 被内置函数 format() 和 str.format() 方法调用，使用特殊的格式代码显示对象的字符串表示形式
        如果没有定义 __format__ 方法，从object继承的方法会返回str(my_object)

使用 __slots__ 属性节省空间
-------
将 __slots__ 属性设置为可迭代对象（如元组）来替代 __dict__ ，可以节省空间
每个子类都要定义 __slots__ 属性，解释器会忽略继承的 __slots__ 属性
实例只能拥有 __slots__ 中列出的属性
如果不把 '__weakref__' 加入 __slots__,实例就不能作为弱引用的目标 ??

序列协议
=======
在 Python 中创建功能完善的序列类型无需使用继承,只需实现符合序列协议的方法
在面向对象编程中,协议是非正式的接口,只在文档中定义,在代码中不定义
Python 的序列协议只需要 __len__ 和 __getitem__ 两个方法
协议是非正式的,没有强制力,因此如果你知道类的具体使用场景,通常只需要实现一个协议的部分。例如,为了支持迭代,只需实现 __getitem__ 方法,没必要提供 __len__方法

接口：从协议到抽象基类
=======
序列协议
-------
__contains__ # Container | __iter__ # Iterable | __len__ # Sized | __getitem__ | __reserved__ | __setitem__ # 可变序列

继承
=======
子类化内置类型(内置类型的原生方法使用C语言实现)时，特殊方法不会被覆盖 - 类似内置类型在父类中被类而不是对象调用 # 这违背了始终从实例所属的类开始调用方法的原则
不要子类化内置类型，应该继承collections模块里的类(UserDict,UserList,UserString...)
直接在类上调用实例方法时，必须显式传入self参数，因为这样访问的是未绑定方法(unbound method)

处理多重继承
-------
继承接口 - 创建子类型，实现"是什么"关系
继承实现 - 通过重用避免代码重复
使用抽象基类显式表示接口
一个类为多个不相关的子类提供方法实现，而不体现"是什么"关系，应该明确定义为混入类(mixin class)
不要子类化多个具体类
优先使用对象组合，而不是类继承

迭代
=======
所有生成器都是迭代器，因为生成器完全实现了迭代器接口

迭代器接口
-------
__next__ 返回下一个可用元素，没有元素了则抛出 StopIteration 异常
__iter__ 返回self，以便在该使用可迭代对象的地方使用迭代器(如 for 循环中) # __iter__ 在可迭代(Iterable)对象中实例化并返回一个迭代器
可迭代对象一定不能使自身的迭代器（必须实现__iter__方法，但不要自己实现__next__方法）
迭代器应该一直可以迭代，迭代器的__iter__方法应该返回自身
执行生成器函数，返回一个（实现了迭代器接口的）生成器对象。生成器函数定义体中的return语句会触发生成器对象抛出　StopIteration 异常
也可以用生成器表达式（生成器对象，惰性的列表推导）＃　生成器表达式是语法糖，可以被生成器函数替代

标准库中的生成器函数
-------
os.walk
itertools.takewhile(boolfunc, iterable)

上下文管理器和with块
=======
上下文管理器协议包括 __enter__ 和 __exit__ 方法
执行 with 返回上下文管理器对象 as 子句 在上下文管理器对象上调用 __enter__ 方法把值绑定到目标变量上
控制流程退出 with 块时 会在上下文管理器上调用 __exit__ 方法

contextlib模块
-------
@contextmanager - 这个装饰器把简单的生成器函数变成上下文管理器 yield语句前面的代码在with块开始时执行,yield语句后面的代码在with块结束时执行
contextmanager 装饰器会把函数包装成实现 __enter__ 和 __exit__ 方法的类

用作协程的生成器
=======
inspect.getgerneratorstate() - 获取协程状态
    'GEN_CREATED' - 等待开始执行
    'GEN_RUNNING' - 多线程应用中可以看到
    'GEN_SUSPENDED' - 暂停
    'GEN_CLOSED' - 执行结束

next(coro)/coro.send(None) - 预激协程
coro.send(xxx) - 向协程发送数据
coro.throw() - 作用是让调用方抛出异常，在生成器中处理 # 如果生成器处理了传入的异常，代码会向前执行到下一个yield表达式，产出的值将会成为返回值；如果生成器未处理，异常会向上冒泡到调用方的上下文中
coro.close() - 终止协程(生成器)
协程中未处理的异常会终止协程
yield from 用于简化for循环中的yield表达式 # yield from 句法会自动预激协程 - 与 yield 一样只能在函数内部使用
    yield from iterable
    相当于
    for x in iterable
        yield x

获取协程的返回值
-------
协程中的return表达式的返回值保存在 StopIteration 的 value 属性中
yield from 结构会在内部自动捕获 StopIteration 异常，并把value属性的值作为表达式的值

异步编程
-------
使用 yield from 和 asyncio 模块
协程可在单个线程中管理并发活动
在 asyncio 包中, yield from 的作用是把控制权交给事件循环
事件循环通过基于回调的底层API，在阻塞的操作执行完毕后获得通知，然后把结果发给暂停的协程

离线和连续事件仿真
-------
可以使用 多线程 或 单线程中使用面向事件的编程技术（事件循环驱动的回调 或 协程）实现
生成器的三种代码编写风格： 拉取式（迭代器） 推送式（计算平均值） 任务式（协程）

concurrent.futures
-------
with futures.ThreadPoolExecutor(max_workers=n) as executor:
    executor.map - 直接得到future结果（生成器） # 返回结果的顺序和调用开始的顺序相同(可能导致获取结果时的阻塞，如果不需要获取所有结果后再处理，可以使用 Executor.submit 和 futures.as_completed 函数)
    executor.submit - 创建future
    futures.as_completed(future_list) - 在future运行结束后产出future
        future.result() - 获取future的结果
concurrent.futures.Future 和 asyncio.Future 这两个类的实例都能表示可能已经完成或者尚未完成的延迟计算

GIL (Global Interpreter Lock, 全局解释器锁)
-------
CPython受GIL的限制，任何时候都只允许运行一个线程，无法实现并行 # 一次只允许使用一个线程执行Python字节码
GIL 几乎对 I/O 密集型处理无害 # I/O 密集型作业使用 ProcessPoolExecutor 类得不到任何好处(使用ThreadPoolExecutor即可)
标准库中所有执行阻塞型I/O操作的函数，在等待操作系统返回结果时都会释放GIL
time.sleep 也会释放GIL
使用 concurrent.futures 模块能把工作分配给多个Python进程 绕开 GIL 实现并行计算 # ProcessPoolExecutor
ProcessPoolExecutor 线程池中的默认线程数是 os.cpu_count()

asyncio 包
-------
使用事件循环驱动的协程实现并发
asyncio.coroutine 装饰的协程由调用方使用 yield from 驱动或由 asyncio 包的某个函数(eg. asyncio.async -> Task)驱动
使用 Task.cancel() 方法在协程内部抛出 asyncio.CancelledError 异常， 协程只能在暂停的yield处取消，可以在此处理CancelledError异常
asyncio 包中有多个函数会自动(使用 asyncio.async 函数)把参数指定的协程包装在 asyncio.Task 对象中， eg. BaseEventLoop.run_until_complete() 方法
asyncio.wait(coro/future_iterable) -> coro # wait 会分别把各个协程包装进一个Task对象

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
stdout.flush() - 刷新缓冲区（正常情况下遇到换行才会刷新stdout缓冲）

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
    wraps - 将被装饰的函数的属性(__name__, __doc__等)复制到新函数中

import time
-------
time.time() - 当前时间戳
time.strftime(format[, t]) - 时间的字符串表示 第二个参数默认是 time.localtime() 的返回值
time.strptime(string[, format]) - 字符串按指定格式解析成time.struct_time
time.localtime([secs]) -  时间戳转time.struct_time 默认参数是当前时间戳
time.mktime(t) - time.localtime() 的反函数，time.struct_time转时间戳

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

tqdm
-------
tqdm - 能处理任何可迭代对象，生成迭代器，显示迭代进度

struct
-------
pack
unpack

hashlib
-------

itertools
-------
zip
zip_longest
生成器（工厂）函数 - 返回生成器
----
count(start, step) - 生成等差数列
takewhile - 生成一个使用另一个生成器的生成器(类似filter)

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
abc (抽象基类)
    Sequence

random
-------
choice(seq) - 从非空序列中随机取一个元素并返回

math
hypot(x, y) - 模 sqrt(x*x + y*y) 原点到 point(x, y) 的长度 斜边长度

bisect - 二分法
-------
bisect - bisect_right 的别名
insort - insort_right 的别名

operator
-------
算术运算符相关函数
从序列中取出元素或读取对象属性
    itemgetter # itemgetter(n) -> lambda field: field[n]  # 传多个参数会返回提取的值构成的元组 # 支持实现 __getitem__ 方法的类(因为使用了[]运算符)
    attrgetter

inspect
-------
提供高阶内省函数
