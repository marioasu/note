Mr.su  08:05:31
数据类型
=======
基本数据类型
-------
整数类型 byte shot int long
浮点类型 float double
字符型 char
布尔型 boolean

引用数据类型
-------
类 class
接口 interface
数组 array

类型类
-------
Byte
Short
java.lang.Integer
java.lang.Long
java.lang.Float/Float
java.lang.Double/Double
char
boolean

运算符
=======
+ - * / %

操作数 ＋ 运算符 ＝ 表达式

常量
=======
final 数据类型 常量名称[＝值]

数据类型转换
=======
自动类型转换
-------
	转换后类型兼容
	转换后表示范围变大
boolean不能进行类型转换
整形->浮点

强制类型转换
-------
	(类型) 变量名

运算符
=======
赋值运算符
-------
=

一元运算符
-------
+
-
!
~	取补码

算术运算符
-------
+
-
*
/
%

关系运算符
-------
>
<
>=
<=
==
!=

递增与递减运算符
-------
++
--

位运算符
-------
&
^
|
<<
>>

逻辑运算符
-------
&&
||

括号运算符
-------
()

方括号运算符
-------
[]

表达式
=======
由操作数与运算符组成

算术表达式
-------

关系表达式 -> boolean
-------
	a > b

逻辑表达式 -> boolean
-------
	a && b

条件表达式
-------
	a ? b : c

赋值表达式
-------
	z = x * y

语句
=======
由表达式组成
	a + b;
	java中可以有空语句（不建议使用）

声明语句
-------
<声明数据类型> <变量1> ... <变量n>;

赋值语句
-------
a = 37;

程序控制结构
=======
顺序结构
-------

选择结构
-------
if ()
	...
else if ()
	...
else
	...
多重选择
switch(expression)
{
	case option1:
		statement1...
		break;
	case ...
		...
		break;
	...
	default:
		...
}
option 只能是字符或者常量

循环结构
-------
while(任何表达式) {
	...
}

do {
	循环体
} while (条件);

for (赋值初值; 判断条件; 赋值增减量) {
	
}

break
-------
跳出 swithch/for/while/do while

continue
-------
结束当次循环

转义字符
=======
"\t" tab
"\n" 换行

数组
=======
一维数组
-------
数据类型 数组名[] // 声明数组
数组名 ＝ new 数据类型[个数] // 分配内存
数据类型 数组名[] = {初值0,初值1,...,初值n} // 声明同时赋初值

二维数组
-------
数据类型 数组名[][]
数组名 = new 数据类型[行数][列数]
数据类型 数组名[][]＝ new 数据类型[行数][列数]
数据类型 数组名[][] = {
	{...}
	{...}
	{...}
} // 允许每行列数不同

多维数组
-------
只需将中括号再加一组

属性
-------
.length 数组长度

相关API
-------
System.arraycopy(source,index,dest,index,n)
Arrays.sort(arr) // java.util

面向对象设计
类和对象
=======
模块的封装有明确的范围和边界，保证模块的质量和可靠性，支持软件工程化思想
Java出于安全性和可靠性的考虑，仅支持单重继承，而通过使用接口机制来实现多重继承
Java语言中含有方法重载与成员覆写两种形式的多态
	方法重载：同一类允许同名方法，单方法的参数不同，功能不同
	成员覆写： 子类与父类允许有相同变量名称，数据类型不同，允许有相同方法名称，功能不同

对象比较
=======
"==" 比较对象内存地址是否相等
str.equals() 比较对象内容是否一致

类属性和对象属性初始化顺序
1.类属性（静态变量）定义时初始化
2.static块中的初始化代码
	static {} 静态代码块
3.对象属性（非静态变量）定义时初始化
4.构造方法（函数）中的初始化代码

抽象类
=======
类和方法的关键字 abstract
不能被直接实例化
方法只声明，不实现
非抽象子类必须复写所有抽象方法

接口 interface
=======
接口里的数据成员必须初始化且均为常量(final)
接口里的方法必须全部声明为abstract，不能保有一般方法
class Class implements Interface
interface Interface extends Pinterface1,Pinterface2...
	接口是Java实现多继承的一种机制

Object类
=======
所有类的父类
方法
	toString
	equals

内部类
=======
outer = new Outer()
Outer.Inner inner = outer.new Inner()
匿名内部类
-------
interface A
func(new A(){
	...
});
匿名对象
-------
func(new Class().objFunc());
对象使用一次就会被Java的垃圾收集器回收

static方法内只能访问到static成员变量

java中的对象和数组的赋值和传参为引用传递

this
-------
this() 调用本类中无参构造方法

static
=======
static 声明的属性所有对象共享 -- 类变量
static 声明的方法只能使用static属性 -- 类方法
static属性和方法可由类名直接访问

main 方法
=======
public 供虚拟机调用
static 虚拟机执行时不必创建对象
void 无返回值
String[] args 保存类执行时需要的参数

静态代码块
=======
类被载入时执行 且只执行一次
常用来进行类属性的初始化

final
-------
标记的类不能被继承 -- 终态类
标记的方法不能被覆写 -- 终态方法
标记常量

instance of 类／接口
-------
实例是否属于一个类或实现了接口

java 常用类库
=======
String 和 StringBuffer 类 -- 处理字符串 在java.lang包中
-------
StringBuffer类用于类容可改变的字符串 再使用StringBuffer.toString()方法将其转换成String类
连接操作符 通过 StringBuffer类和它的append方法实现的

8种基本数据类型的包装类
-------
int - Integer
char - Character
float - Float
double - Double
byte - Byte
long - Long
short - Short
boolean - Boolean

Integer
-------
.parseInt(str)

System类
-------
含系统相关的重要方法和变量
exit(int status)
CurrentTimeMillis() -- 时间戳 long类型
getProperties() -- 获取当前虚拟机的环境属性 return Properties类型的对象
	Properties是HashTable的子类
setProperties()

Runtime类
-------
Runtime类封装了Java命令本身运行的进程
Runtime run = Runtime.getRuntime()
run.exec(xxx)

Exception e
-------
e.printStackTrace()

Date 与 Calendar、DateFormat类
-------
Date类开始设计的时候没考虑国际化
Calendar.getInstance()返回Calendar类型(它的字类GregorianCalendar)的对象实例
java.text.SimpleDateFormat类是JDK目前提供的一个DateFormat子类 可用于转换Date

Math 与 Random类
-------

pakage
------
pakage xxx
声明后同一文件内的接口或类都会被纳入相同的package中
import packagename.classname 导入

访问控制符
-------
private 只能在类内部使用
default(不使用控制符) 能在同一包内的类中使用
protected 可在同一包内和不同包的子类中使用
public 可以在所有类中使用

jar
-------
Java Archive File

异常处理
-------
throw 生成异常对象并交给运行时系统处理的过程
catch 运行时系统在方法的调用栈中查找 回溯找到包含相应异常处理方法的过程

















