数据类型
=======
基本类型
-------
整数 可用 unsigned 修饰
int 2/4字节 sizeof(type) 返回类型所占字节数
short 2字节
long 4字节
char 1字节
浮点 可用 unsigned 修饰
float 4字节
double 8字节
long double 16字节
- 最大值 最小值 精度常量： FLT_MAX FLT_MIN FLT_DIG

枚举类型
-------
定义：
enum typeName{ valueName1, valueName2, valueName3, ...... };
赋值：
enum typeName var = valueNamex;

void类型
-------
表示类型的缺失

派生类型
-------
指针
数组
结构
共用体
函数
- 数组和结构类型统称为聚合类型 函数的类型指的是函数返回值的类型

变量声明
-------
用 extern 修饰表示只声明，不定义（不分配存储空间） 可在别的文件中定义

左值和右值表达式
-------
lvalue: 指向内存位置 可以出现在赋值号的左边或右边 lvalue在需要rvalue的地方会自动转换为rvalue
rvalue: 存储在内存中某些地址的数值 不能对其赋值 只能出现在赋值号的右边

常量
-------
整数常量 可以带后缀U/L（unsigned/long）
浮点常量 可以带后缀U/L（unsigned/long） 可以使用指数形式E
字符常量 括在单引号中 可以是 普通字符 转义字符（'\t'） 通用字符（'\u02C0'）
字符串常量 括在双引号中 可以包含普通的字符、转义序列和通用的字符

定义常量
-------
使用 #define 预处理器
使用 const 关键字
- 宏常量没有数据类型 只进行字符替换 没有类型安全检查

存储类
-------
定义c程序中变量/函数的范围（可见性）和生命周期
auto 默认存储类 只能用在函数内（只能修饰局部变量）
register 定义存储在寄存器中而不是RAM中的局部变量 最大尺寸等于寄存器的大小（通常是一个词） 不能对它应用一元运算符（因为它没有内存位置）
static 全局变量的默认存储类 使用static修饰局部变量可以在函数调用之间保持局部变量的值
extern 提供一个对所有的程序文件都是可见的全局变量的引用 extern修饰符通常用于当有两个或多个文件共享相同的全局变量或函数的时候

运算符
-------
sizeof() 返回变量大小(byte)
& 返回变量地址
* 指向一个变量

数组
=======
存储固定大小 相同类型的元素

声明和初始化
-------
type arrayName [ arraySize ] = {x,ss,dd...};

数组名
-------
不带索引的数组名可生成指向数组第一个元素的指针

指针
=======
每一个变量都有一个内存位置 并可以使用&访问
指针是一个变量，其值为另一个变量的地址 -- 指针可以用来保存变量地址
使用*可以访问指针指向的值

NULL指针
-------
NULL 指针是一个定义在标准库中的值为零的常量
在大多数的操作系统上，程序不允许访问地址为 0 的内存，因为该内存是操作系统保留的。然而，内存地址 0 有特别重要的意义，它表明该指针不指向一个可访问的内存位置
null 是 falsy的
可以对指针进行四种算术运算：++、--、+、-

声明
-------
type *var_name;

函数指针
-------
声明： typedef int (*fun_ptr)(int, int); // 声明一个指向相同参数、返回值的函数指针变量

回调函数
-------
函数指针变量可以作为某个函数的参数来使用的，回调函数就是一个通过函数指针调用的函数

字符串
=======
在 C 语言中，字符串实际上是使用 null 字符 '\0' 终止的一维字符数组
字符串函数 strcpy strcat strlen strcmp strchr strstr

结构体
=======
允许存储不同类型的数据项

定义
-------
struct [structure tag]
{
   member definition;
   member definition;
   ...
   member definition;
} [one or more structure variables];

访问
-------
成员访问运算符.

指向结构的指针
-------
struct Books *struct_pointer;
struct_pointer = &Book1;
使用指针访问结构的成员 struct_pointer->title;

位域
-------
声明：
struct
{
  type [member_name] : width ;
};

存储空间
-------
结构体以4byte为单位 不能跨空间存储

共用体
=======
允许在相同的内存位置存储不同的数据类型 共用体变量所占的内存长度等于最长的成员变量的长度

定义
-------
union [union tag]
{
   member definition;
   member definition;
   ...
   member definition;
} [one or more union variables]; 

typedef
=======
为类型取一个新的名字

typedef vs #define
-------
typedef 仅限于为类型定义符号名称 #define 还能为数值定义别名
typedef 是由编译器执行解释的，#define 语句是由预处理器进行处理的

函数
=======
声明
-------
int max(int, int);

定义
-------
return_type function_name( parameter list )
{
   body of the function
}

调用
-------
传值调用
引用调用

作用域
-------
内部函数/静态函数 用static关键词修饰 作用域只局限于所在文件
外部函数 用extern关键词修饰 缺省默认为外部函数 在需要调用的文件中用extern关键词声明后可以调用

c标准库内置函数
-------
char *strcat(char *dest, const char *src);

文件系统操作
=======
输入&输出
-------
c语言把所有设备都当作文件，所以设备（比如显示器）被处理的方式与文件相同
以下三个文件会在程序执行时自动打开，以便访问键盘和屏幕
标准文件    文件指针    设备
标准输入    stdin   键盘
标准输出    stdout  屏幕
标准错误    stderr  您的屏幕

文件指针是访问文件的方式
scanf() 函数用于从标准输入（键盘）读取并格式化， printf() 函数发送格式化输出到标准输出（屏幕）

预处理器
=======
编译前完成文本替换

运算符
-------
宏延续运算符（\）
字符串常量化运算符（#）
标记粘贴运算符（##）
defined() 运算符

参数化的宏
-------
可以使用参数化的宏来模拟函数
#define square(x) ((x) * (x))
