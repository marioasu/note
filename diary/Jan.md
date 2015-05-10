2015
======
Jan
==============
1.9
==============
测试地址
--------------
http://test3.hellokey.com/

企业邮箱
--------------
szp@arttact.com

团队协作
--------------
https://tower.im/

邮件平台
--------------
http://sendcloud.sohu.com/

短信服务商
--------------
- 1.http://www.yunpian.com/		
0.055(50000条以下) - 0.050 元/条   POST ONLY   Accept:text/plain;charset=utf-8;Content-Type:application/x-www-form-urlencoded;charset=utf-8;
文字限制：70/67字一条		防骚扰：30s一次5分钟3次

- 2.http://www.yuntongxun.com/
语音支持  0.06/条(无最低消费)	 0.058/条(500元/月最低消费)		Accept:application/xml;
Content-Type:application/xml;charset=utf-8; 
Content-Length:256;   改变头可以设置xml或者json格式
65字/条
http://www.rdsms.net/

sublime package control
--------------  Ctrl+`/View->Show Console
去 https://packagecontrol.io // 找到安装命令 

1.10
======
php
------
define() 定义常量
defined() 判断常量是否定义
    isset() 对于变量或数组中的元素
    function_exists() 对于函数
    empty() 是(boolean)var 的反义词
constant() 返回常量值

array_merge() 合并一个或多个数组
    字符键名后面覆盖前面 数字键名不覆盖 数字键名重新索引

wampserver多版本
------
http://windows.php.net/download/

1.11
======
windows上使用composer
------
- 安装composer
    C:\bin>php -r "readfile('https://getcomposer.org/installer');" | php
    C:\bin>echo @php "%~dp0composer.phar" %*>composer.bat 简化php composer.phar 到composer  加入环境变量
- composer global require "fxp/composer-asset-plugin:1.0.0-beta4" composer插件 用于管理bower和npm包
- composer create-project --prefer-dist yiisoft/yii2-app-basic basic 用composer安装yii2 basic版本并重命名

- github Oauth
    到github的Applications里生成Oauth并在第一次复制(以后就看不到了)
        我的:0e4bf69d6c81b36d1a028d852336fca330a14108
    加入到composer的配置
        composer config -g github-oauth.github.com <oauthtoken>

yii2学习
------
- 基础controller
    [[yii\web\Controller::render()|render()]] 被用来渲染视图文件
    继承自yii\base\Controller
    含render($view, $params = [])方法

- 视图
    标签写法,encode()防恶意代码<?= Html::encode($message); ?>

- model
    model包含一个名为 rules() 的方法，用来返回数据验证规则的集合
    可以调用 [[yii\base\Model::validate()|validate()]] 方法触发数据验证
    如果有数据验证失败，将把 [[yii\base\Model::hasErrors|hasErrors]] 属性设为 ture，想要知道具体发生什么错误就调用 [[yii\base\Model::getErrors|getErrors]]

- Yii
    Yii::$app->request->post() 接收到的post数据
    表达式 Yii::$app 代表应用实例，它是一个全局可访问的单例。同时它也是一个服务定位器，能提供 request，response，db 等等特定功能的组件
    由 Yii 的 [[yii\web\Request::post()]] 方法负责搜集post数据
    实践中你应该考虑使用 [[yii\web\Controller::refresh()|refresh()]] 或 [[yii\web\Controller::redirect()|redirect()]] 去避免表单重复提交问题
- ActiveForm
    视图使用了一个功能强大的小部件 [[yii\widgets\ActiveForm|ActiveForm]] 去生成 HTML 表单
    <?php $form = ActiveForm::begin(); ?> // 渲染表单开始标签
    <?php ActiveForm::end();?> // 渲染表单关闭标签
    用[[yii\widgets\ActiveForm::field()|field()]] 方法去创建输入框
    用 [[yii\helpers\Html::submitButton()]] 方法生成提交按钮

- 使用数据库
    Yii::$app->db 表达式可config/db.php 的配置数据
    基础类 [[yii\db\ActiveRecord]]
    类名对应表名,可以覆写 [[yii\db\ActiveRecord::tableName()|tableName()]] 方法去显式指定相关表名

    $query = AR::find()
    $query->count()
    $record = AR::findOne($primaryKey)
    $record->attr = 'xxx';
    $record->save()

- 分页类 use yii\data\Pagination;
    为 SQL 查询语句设置 offset 和 limit从句，确保每个请求只需返回一页数据
    在视图中显示一个由页码列表组成的分页器
    使用 [[yii\widgets\LinkPager]] 去渲染从操作中传来的分页信息

- Gii 生成代码
    Model Generator
        tableName()
        rules()
        attributeLabels()

1.12
======
ThinkPHP 框架
------
入口可用定义
	define('RUNTIME_PATH','./Runtime/'); // 定义运行时目录
	define('DIR_SECURE_FILENAME', 'default.html'); // 自定义目录安全文件
	define('BUILD_DIR_SECURE', false); // 关闭生成安全文件
	define('CONF_EXT','.ini'); // 配置文件后缀  yaml/json/xml/ini
	define('CONF_PARSE','parse_test'); // 配置文件对应的解析函数
	define('COMMON_PATH','./Common/'); // 公共模块位置
	define('BIND_MODULE','Admin'); // 绑定Admin模块到当前入口文件 默认生成IndexController
	define('BUILD_CONTROLLER_LIST','Index,User,Menu'); // 生成更多的控制器
	define('BUILD_MODEL_LIST','User,Menu'); // 生成模型
	// 定义存储类型和应用模式为SAE（用于支持SAE平台）
	define('STORAGE_TYPE','sae');
	define('APP_MODE','sae');

config.php
	'LOAD_EXT_CONFIG' => 'user,db', // 加载扩展配置文件 user.php和db.php
	'LOAD_EXT_CONFIG' => array('USER'=>'user','DB'=>'db'), // 获取方式改变 C('USER.USER_AUTH_ID');
	'AUTOLOAD_NAMESPACE' => array(
	    'My'     => THINK_PATH.'My',
	    'One'    => THINK_PATH.'One',
	) // 自动加载命名空间 默认的有Library和模块命名空间
	类库映射的方式优先且效率高于命名空间

A方法-实例化控制器
	A('模块/控制器') -- 同模块下可省略模块

U方法-动态生成URL
	U('地址表达式',['参数'],['伪静态后缀'],['显示域名'])
	[模块/控制器/操作#锚点@域名]?参数1=值1&参数2=值2... // 地址表达式的格式
	参数支持数组和字符串
	模板中采用 {:U('参数1', '参数2'…)} 的方式使用U方法

系统的\Think\Controller类
	1.提供了ajaxReturn方法用于AJAX调用后返回数据给客户端 // AJAX返回
	2.success 和 error 方法 (提示信息[,地址[,等待时间]]) 
		跳转地址是可选的，success方法的默认跳转地址是$_SERVER["HTTP_REFERER"],error方法的默认跳转地址是javascript:history.back(-1);

	3.redirect方法 地址和U方法一致 
		$this->redirect('New/category', array('cate_id' => 2), 5, '页面跳转中...');
		直接使用redirect('.../New/category/cate_id/2', 5, '页面跳转中...') 跳转到指定URL

I方法-用于更加方便和安全的获取系统输入变量,可以用于任何地方
	I('变量类型.变量名/修饰符',['默认值'],['过滤方法'],['额外数据源']) // 用法
    param变量类型支持自动判断当前请求类型
    I('get.') // 获取整个$_GET数据
    path变量可以获取PATHINFO模式参数
    data类型变量可以用于获取不支持的变量类型的读取
        I('data.file1','','',$_FILES)
    默认过滤机制 htmlspecialchars
    FILTER_VALIDATE_EMAIL (?
        修饰符 作用
        s   强制转换为字符串类型
        d   强制转换为整形类型
        b   强制转换为布尔类型
        a   强制转换为数组类型
        f   强制转换为浮点类型

请求类型
    常量  说明
    IS_GET  判断是否是GET方式提交
    IS_POST 判断是否是POST方式提交
    IS_PUT  判断是否是PUT方式提交
    IS_DELETE   判断是否是DELETE方式提交
    IS_AJAX 判断是否是AJAX提交
    REQUEST_METHOD  当前提交类型

git
------
git config --global user.name "xx" // 设置用户名
git config --global user.email "xx@xxx.com" // 设置邮箱
git remote add origin git@github.com:michaelliao/learngit.git // 关联远程仓库
ssh-keygen -t rsa -C "youremail@example.com" // 生成SSH秘钥 ~/.ssh/ 里
ssh -T git@git.oschina.net (验证)

1.13
=======
ThinkPHP
--------
空操作
    public function _empty() // 仅在你的控制器类继承系统的Think\Controller类才有效 否则可以自定义__call()
    class EmptyController extends Controller // 空控制器

模型
-------
模型定义
    只有在需要封装单独的业务逻辑的时候，模型类才是必须被定义的

    属性  说明
    tablePrefix 定义模型对应数据表的前缀，如果未定义则获取配置文件中的DB_PREFIX参数
    tableName   不包含表前缀的数据表名称，一般情况下默认和模型名称相同，只有当你的表名和当前的模型类的名称不同的时候才需要定义。
    trueTableName   包含前缀的数据表名称，也就是数据库中的实际表名，该名称无需设置，只有当上面的规则都不适用的情况或者特殊情况下才需要设置
    dbName  定义模型当前对应的数据库名称，只有当你当前的模型类对应的数据库名称和配置文件不同的时候才需要定义

实例化
    $User = new \Home\Model\UserModel();
    new \Home\Model\NewModel(['模型名'],['数据表前缀'],['数据库连接信息']); // 带参数实例化模型类
    数据表前缀传入空字符串表示取当前配置的表前缀，如果当前数据表没有前缀，则传入null即可

数据库配置
    'DB_TYPE'      =>  '',     // 数据库类型
    'DB_HOST'      =>  '',     // 服务器地址
    'DB_NAME'      =>  '',     // 数据库名
    'DB_USER'      =>  '',     // 用户名
    'DB_PWD'       =>  '',     // 密码
    'DB_PORT'      =>  '',     // 端口
    'DB_PREFIX'    =>  '',     // 数据库表前缀
    'DB_DSN'       =>  '',     // 数据库连接DSN 用于PDO方式
    'DB_CHARSET'   =>  'utf8', // 数据库的编码 默认为utf8
    'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增

D方法-实例化具体数据模型
    如果在Linux环境下面，一定要注意D方法实例化的时候的模型名称的大小写// 大驼峰
    如果不存在自定义模型类(自己模块下/Common下) 则实例化\Think\Model基类
    支持跨模块 // 此时不加载公共模块的模型类
M方法-不加载具体模型类,性能更高
    $User = M('User'); // 和用法 $User = new \Think\Model('User'); 等效
    $User = M('db_name.User','ot_'); // 支持跨库操作
    $New  = M('new','think_',$connection); // 参数和和\Think\Model类一样
    $User = M('\Home\Model\CommonModel:User','think_','db_config'); // 实例化公共模型类
    使用M方法的前提是未定义具体的模型类
    $Model = M(); // $Model = new Model(); 实例化控模型,可用于执行原生SQL
    D方法没找到定义的模型类,则会自动调用M方法

模型
-------
'DB_FIELDS_CACHE'=>false // 关闭字段缓存(调试模式下用)
getDbFields() // 获取当前数据对象的全部字段信息
分布式数据库支持
    调用模型的CURD操作的话，系统会自动判断当前执行的方法的读操作还是写操作，如果你用的是原生SQL，那么需要注意系统的默认规则： 写操作必须用模型的execute方法，读操作必须用模型的query方法，否则会发生主从读写错乱的情况
连贯/链式操作
-------
    系统支持的连贯操作方法有：
        连贯操作    作用  支持的参数类型
        where*  用于查询或者更新条件的定义   字符串、数组和对象
        table   用于定义要操作的数据表名称   字符串和数组
        alias   用于给当前数据表定义别名    字符串
        data    用于新增或者更新数据之前的数据对象赋值     数组和对象
        field   用于定义要查询的字段（支持字段排除）  字符串和数组
        order   用于对结果排序     字符串和数组
        limit   用于限制查询结果数量  字符串和数字
        page    用于查询分页（内部会转换成limit）     字符串和数字
        group   用于对查询的group支持   字符串
        having  用于对查询的having支持  字符串
        join*   用于对查询的join支持    字符串和数组
        union*  用于对查询的union支持   字符串、数组和对象
        distinct    用于查询的distinct支持     布尔值
        lock    用于数据库的锁机制   布尔值
        cache   用于查询缓存  支持多个参数
        relation    用于关联查询（需要关联模型支持）    字符串
        result  用于返回数据转换    字符串
        validate    用于数据自动验证    数组
        auto    用于数据自动完成    数组
        filter  用于数据过滤  字符串
        scope*  用于命名范围  字符串、数组
        bind*   用于数据绑定操作    数组或多个参数
        token   用于令牌验证  布尔值
        comment     用于SQL注释     字符串
        index   用于数据集的强制索引（3.2.3新增）     字符串
        strict  用于数据入库的严格检测（3.2.3新增）    布尔值
        所有的连贯操作都返回当前的模型实例对象（this）,其中带*标识的表示支持多次调用
    where
        $Model->where("id=%d and username='%s' and xx='%f'",$id,$username,$xx)->select(); // 配合预处理机制,安全 vsprintf() (?
        支持数组和表达式
            表达式     含义
            EQ  等于（=）
            NEQ     不等于（<>）
            GT  大于（>）
            EGT     大于等于（>=）
            LT  小于（<）
            ELT     小于等于（<=）
            LIKE    模糊查询
            [NOT] BETWEEN   （不在）区间查询
            [NOT] IN    （不在）IN 查询
            EXP     表达式查询，支持SQL语法
        多次的数组条件表达式会最终合并,但字符串条件则只支持一次 // 支持多次调用
    table // 需要完整表名
        切换数据表
        多表操作
        table('__USER__') // 简化数据表前缀的传入
        支持字符串和数组 (参考参数传入方式?
            table('think_user user,think_role role')
            table(array('think_user'=>'user','think_role'=>'role'))
        一般情况下,无需调用table方法，默认会自动获取当前模型对应或者定义的数据表
    alias
        alias用于设置当前数据表的别名，便于使用其他的连贯操作例如join方法等
        $Model->alias('a')->join('__DEPT__ b ON b.user_id= a.id')->select();
    data-设置当前要操作的数据对象的值
        data是数组则可以直接add($data)
        data($data)->save() // save($data) // save 中有主键则省略where
    find-读操作
    field-标识要返回或者操作的字段，可以用于查询和写入操作
        // 参数串支持别名和函数
        // 支持数组/别名/函数
        field(true)的用法会显式的获取数据表的所有字段列表,哪怕你的数据表有100个字段
        $Model->field('content',true)->select(); // 排除字段 第一个字段支持串和数组
        $Model->field('title,email,content')->save($data); // 如果data数据中包含有title,email,content之外的字段数据的话，也会过滤掉
    order-用于排序
        支持串和数组
    limit-限制操作条数
        // 支持串和两个数字
    page-更人性化的分页查询
        // 支持串和两个数字
        $Article->limit(25)->page(3)->select(); // page方法还可以和limit方法配合使用,page表示第几页
    group-分组
    having-用于配合group方法完成从分组的结果中筛选（通常是聚合条件）数据
    join-用于表关系        
        INNER JOIN: 如果表中有至少一个匹配，则返回行，等同于 JOIN
        LEFT JOIN: 即使右表中没有匹配，也从左表返回所有的行
        RIGHT JOIN: 即使左表中没有匹配，也从右表返回所有的行
        FULL JOIN: 只要其中一个表中存在匹配，就返回行
        支持多次join
        第二个参数支持INNER LEFT RIGHT FULL 默认INNER
        支持数组 // 第二个参数无效。因此必须在字符串中显式定义join类型 且只能使用一次
    union-合并两个或多个 SELECT 语句的结果集
        union('SELECT name FROM think_user_1') // 串用法
        union(array('field'=>'name','table'=>'think_user_1')) // 数组用法
        union(array('SELECT name FROM think_user_1','SELECT name FROM think_user_2')) // 数组用法2
        第二个参数为true表示UNION ALL
    distinct(true)-返回唯一不同的值
    lock(true)-数据库锁机制 (?)
    cache(true)-查询缓存 // 不在进行数据库查询
        默认情况下,缓存有效期和缓存类型是由DATA_CACHE_TIME和DATA_CACHE_TYPE配置参数决定的，但cache方法可以单独指定
            cache(true,60,'xcache') xcache (?)
            cache('key',60) // cache方法可以指定缓存标识 这样外部就可以通过S方法直接获取查询缓存的数据 $data = S('key');
        指定查询缓存的标识可以使得查询缓存更有效率

模板地址
--------
http://themeforest.net/item/metronic-responsive-admin-dashboard-template/full_screen_preview/4021469
http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?WT.oss_phrase=admin&WT.oss_rank=2&WT.z_author=keenthemes&WT.ac=search_list

PHP
-------
parse_url

1.14
======
PHP
------
file_get_contents($filename[, $use_include_path, $context...)
$opts = array(
    'http'=>array(
        'method' => 'POST',
        'header' => 'Content-Type: application/x-www-form-urlencoded',
        'content' => $query_str,
    ),
);
$context = stream_context_create($opts);
http_build_query($arr)

ignore_user_abort()

云片短息规则
------------
同1个手机发相同内容，30秒内最多发送1次，5分钟内最多发送3次 

RPC (Remote Procedure Call Protocol) - 远程过程调用协议

task:rewrite (index.php) // done 

1.15
======
LoadModule rewrite_module modules/mod_rewrite.so // apache载入url重写模块(使.htaccess生效)在.htaccess配置让url省略index.php
urlencode() 除-_.外转%xx(两位十六进制数) 空格编码为加号(+) // urldecode 解码
htmlentities() 编码成html实体 // html_entity_decode() 解码成可用字符

ThinkPHP
------
模版
------
    $this->assign('name', $value); // 赋值 支持传一个键值对数组
    使用php标签或者{$var_name[.xxx]}解析变量 支持{$Think.xx} 输出系统常量/变量/配置参数/语言变量
    $this->display() // 渲染模板
    [模块@][控制器:][操作]     常用写法，支持跨模块 模板主题可以和theme方法配合 // 渲染参数
    fetch('模板文件') // 渲染并返回值
    show('渲染内容'[,'字符编码'][,'输出类型']) // 直接渲染内容(不使用模板)
    可以对模板变量使用函数 // {$create_time|date="y-m-d",###}
    支持{:} 作为php模板标签
    支持默认值 // {$user.nickname|default="这家伙很懒，什么也没留下"}
    支持运算符 // 在使用运算符的时候，不再支持点语法和常规的函数用法
    支持三元运算符
    <block name="xxx"></block> 定义区块
    <extend name="xx" /> 继承 // name可以直接写路径
    <include file="ss/xx"/> 包含 // 使用模版表达式 模块@主题/控制器/操作 可包含多个,用逗号隔开
    子模板中只能定义基础模版中有的区块,不能定义其它模板内容
    提供inport/load 标签引入js和css文件 也可以用js/css标签 或直接使用html的script和link标签
    literal标签里的内容不解析(原样输出)
    模板内可以使用php的注释

other
--------
Request For Comments（RFC），是一系列以编号排定的文件 // 一种建议标准(如 指定 MIME Type 媒体类型)
    客户端自己定义的格式，一般只能以 application/x- 开头

1.16
========
ThinkPHP
--------
模版替换规则
    __ROOT__： 会替换成当前网站的地址（不含域名）
    __APP__： 会替换成当前应用的URL地址 （不含域名）
    __MODULE__：会替换成当前模块的URL地址 （不含域名）
    __CONTROLLER__（__或者__URL__ 兼容考虑）： 会替换成当前控制器的URL地址（不含域名）
    __ACTION__：会替换成当前操作的URL地址 （不含域名）
    __SELF__： 会替换成当前的页面URL
    __PUBLIC__：会被替换成当前网站的公共目录 通常是 /Public/

js闭包
-------
js1.js
var MyFunc = function() {
    var func1 = ...
    var func2 = ...
    return {
        init:function() {
            func1();
            func2();
        }
    }
}
在js2.js中引入后执行
MyFunc.init();

1.17
========
vpn
--------
http://item.taobao.com/item.htm?spm=a1z09.2.9.10.UKi6Rt&id=12406169770&_u=hi38rc23a5c
伺服器名稱： nance.tenacy.net
激活地址：http://tenacy.swe.net/activate 付费季卡：【用名户：040533633097 密码：683549】
激活地址：http://tenacy.swe.net/activate 付费季卡：【用名户：040562370748 密码：609142】

HTTP
--------
状态码用来告诉HTTP客户端,HTTP服务器是否产生了预期的Response。HTTP/1.1协议中定义了5类状态码， 状态码由三位数字组成，第一个数字定义了响应的类别
1XX 提示信息 - 表示请求已被成功接收，继续处理
2XX 成功 - 表示请求已被成功接收，理解，接受
3XX 重定向 - 要完成请求必须进行更进一步的处理
4XX 客户端错误 - 请求有语法错误或请求无法实现
5XX 服务器端错误 - 服务器未能实现合法的请求

1.18
========
S() 设置缓存
S(array(    'type'=>'memcache',    'host'=>'192.168.1.10',    'port'=>'11211',    'prefix'=>'think',    'expire'=>60)); // 初始化

task - RPC限制调用方法 // done
task - pack()

1.19
========
服务器配置
--------
<Files *.html>
Order Allow,Deny
Deny from all
</Files>    // .htaccess文件 不允许直接访问html模板

域名相关
--------
A (Address) 记录是用来指定主机名（或域名）对应的IP地址记录
CNAME指别名记录也被称为规范名字
ISP(Internet Service Provider)，互联网服务提供商，即向广大用户综合提供互联网接入业务、信息业务、和增值业务的电信运营商。

linux
-------
lsb_release -a // 列出所有版本信息

1.20
=====
微信公众平台
-----
商家通过申请公众微信服务号通过二次开发如对接微信会员云营销系统
主要作用消息推送、品牌传播、分享
功能定位群发推送、自动回复、二维码订阅
微信公众账号被分成订阅号和服务号
运营主体是组织（比如企业、媒体、公益组织）的，可以申请服务号 运营主体是组织和个人的可以申请订阅号
可以是第三方开发者模式；也可以是简单的编辑模式

服务号
-------
1个月（自然月）内仅可以发送4条群发消息
服务号可申请自定义菜单

订阅号
-------
每天（24小时内）可以发送1条群发消息

企业号
-------
帮助企业、政府机关、学校、医院等事业单位和非政府组织建立与员工、上下游合作伙伴及内部IT系统间的连接

Token可由开发者可以任意填写，用作生成签名（该Token会和接口URL中包含的Token进行比对，从而验证安全性）。EncodingAESKey由开发者手动填写或随机生成，将用作消息体加解密密钥

测试号
-----
appID   wxdd982985178c500e
appsecret   0ca0b99c7a171f70d3040e00c8908bbd

access_token是公众号的全局唯一票据，公众号调用各接口时都需使用access_token


git
-----
git config --global color.ui true // 让git显示不同颜色
Git工作区的根目录下创建一个特殊的.gitignore文件 // 忽略文件 作用域所在目录及其子目录

other
-----
Virtual Private Server 虚拟专用服务器

1.21
=====
booklist
-----
Just for fun
大教堂与集市
Linux/Unix设计思想
Unix编程艺术
理解Unix进程

git
-----
git reset --hard HEAD^  // HEAD~100或直接写版本号
Git提供了一个命令git reflog用来记录你的每一次命令

linux
-----
rpm -qa | grep xxx 查看程序是否已安装

微信公众平台
------------
access_token是公众号的全局唯一票据，公众号调用各接口时都需使用access_token。开发者需要进行妥善保存。access_token的存储至少要保留512个字符空间。access_token的有效期目前为2个小时，需定时刷新，重复获取将导致上次获取的access_token失效
    http请求方式: GET
    https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=APPID&secret=APPSECRET
    参数说明
    参数  是否必须    说明
    grant_type  是   获取access_token填写client_credential
    appid   是   第三方用户唯一凭证
    secret  是   第三方用户唯一凭证密钥，即appsecret
    返回说明

    正常情况下，微信会返回下述JSON数据包给公众号：

    {"access_token":"ACCESS_TOKEN","expires_in":7200}
    参数  说明
    access_token    获取到的凭证
    expires_in  凭证有效时间，单位：秒

    错误时微信会返回错误码等信息，JSON数据包示例如下（该示例为AppID无效错误）:

    {"errcode":40013,"errmsg":"invalid appid"}

选择兼容模式和安全模式前，需在开发者中心填写消息加解密密钥EncodingAESKey
在安全模式或兼容模式下，url上会新增两个参数encrypt_type和msg_signature。encrypt_type表示加密类型，msg_signature:表示对消息体的签名

php
------
PHP-FPM是一个PHPFastCGI管理器，是只用于PHP的。
/usr/local/php/sbin/php-fpm{start|stop|quit|restart|reload|logrotate}

1.22
======
git
------
$ git rm -r --cached dir // 解除git对某目录的跟踪
$ echo dir/ >> .gitignore
$ git add .gitignore
$ git commit -am 'ignore dir forever'
git reset HEAD <filename> // 撤销对某文件的暂存

#提交时转换为LF，检出时不转换
git config --global core.autocrlf input
#拒绝提交包含混合换行符的文件
git config --global core.safecrlf true

php
-------
$poststr = $GLOBALS["HTTP_RAW_POST_DATA"]; (?)

linux
-------
/sbin/service crond start // 服务在系统启动的时候自动启动

1.23
======
linux
-------
$ find <指定目录> <指定条件> <指定动作>
locate命令其实是"find -name"的另一种写法，但是要比后者快得多，原因在于它不搜索具体目录，而是搜索一个数据库（/var/lib/locatedb）// 可以在使用locate之前，先使用updatedb命令，手动更新数据库
type命令其实不能算查找命令，它是用来区分某个命令到底是由shell自带的，还是由shell外部的独立二进制文件提供的
/etc/init.d/    // 放服务程序

mysql
-------
忘记密码
    修改my.cnf 加 skip-grant-tables
    重新启动mysqld
    mysql> flush privileges ;

git
------
查看文件改动
    git log --pretty=oneline path/filename.suffix
    git show 文件改动生成的hash值

js
-------
what's this
就是JS中，一个函数（function）在被直接调用的时候，其中的this指针永远指向window
可以通过js中的call 和 apply 方法，强行去让方法被一个对象调用，例如：(obj.getName = obj.getName).call(obj) 
JavaScript 支持函数式编程、闭包、基于原型的继承等高级功能 (?)
在 Java 等面向对象的语言中，this 关键字的含义是明确且具体的，即指代当前对象。一般在编译期确定下来，或称为编译期绑定。而在 JavaScript 中，this 是动态绑定，或称为运行期绑定的，这就导致 JavaScript 中的 this 关键字有能力具备多重含义，带来灵活性的同时，也为初学者带来不少困惑
由于其运行期绑定的特性，JavaScript 中的 this 含义要丰富得多，它可以是全局对象、当前对象或者任意对象，这完全取决于函数的调用方式
JavaScript 中函数的调用有以下几种方式：作为对象方法调用，作为函数调用，作为构造函数调用，和使用 apply 或 call 调用
var that = this; // 让内部函数变成一个闭包 并将值绑到that上实现调用函数时值指向对象而不是window
作为构造函数调用
    JavaScript 支持面向对象式编程，与主流的面向对象式编程语言不同，JavaScript并没有类（class）的概念，而是使用基于原型（prototype）的继承方式。相应的，JavaScript 中的构造函数也很特殊，如果不使用 new 调用，则和普通函数一样。作为又一项约定俗成的准则，构造函数以大写字母开头，提醒调用者使用正确的方式调用。如果调用正确，this 绑定到新创建的对象上
在 JavaScript 中函数也是对象，对象则有方法，apply 和 call 就是函数对象的方法，这两个方法异常强大，他们允许切换函数执行的上下文环境（context），即 this 绑定的对象
p1.moveTo.apply(p2, [10, 10]); // 将p1的方法应用到p2上

1.24
========
php
-------
PECL 的全称是 The PHP Extension Community Library ，是一个开放的并通过 PEAR(PHP Extension and Application Repository，PHP 扩展和应用仓库)打包格式来打包安装的 PHP扩展库仓库

try {
    if (1) {
        throw new Exception("v111111"); // 抛出异常 异常类
    }
} catch(Exception $e) { // $e为异常对象
    var_dump($e->getMessage()); 
    var_dump($e);
}

1.26
========
DSN(Data Source Name)
---------------------
支持格式:
user@unix(/path/to/socket)/dbname?charset=utf8
user:password@tcp(localhost:5555)/dbname?charset=utf8
user:password@/dbname
user:password@tcp([de:ad:be:ef::ca:fe]:80)/dbname

pconnect(persistent connect)
-----------------------------
mysql_pconnect() 函数打开一个到 MySQL 服务器的持久连接

other
------
http/1.0里需要客户端自己在请求头加入Connection:Keep-alive方能实现持久连接模式
tps 每秒事务处理量(TransactionPerSecond)

1.27
=======
术语/字段约定
----------
price/special price/final price
create_at/update_at
deposite - 保证金
order - 订单
auction - 拍场
vendor - 商家
user - 用户
manager - 管理员
product - 商品
落槌价+佣金=售卖价
review - 审核
approve - 审核通过 - un(反义)


html5
--------
<html manifest="demo.appcache">
demo.appcache:
    CACHE MANIFEST
    /theme.css
    /logo.gif
    /main.js

ThinkPHP常量
------------
MODULE_PATH 当前模块路径
CONTROLLER_NAME 当前控制器名

1.28
=======
mysql
-------
显式的select所有字段比select * 效率更高

1.29
========
MongoDB
--------
BSON（Binary Serialized Document Format）是一种类json的一种二进制形式的存储格式，简称Binary JSON，它和JSON一样，支持内嵌的文档对象和数组对象，但是BSON有JSON没有的一些数据类型，如Date和BinData类型
RDBMS即关系数据库管理系统(Relational Database Management System)
MongoDB 中多个文档组成集合，多个集合组成数据库
    按照命名空间将集合划分为子集合,让组织结构更好一些
    虽然子集合没有任何特殊的地方，但是使用子集合组织数据结构清晰，这也是MongoDB 推荐的方法
安装
    mongod --dbpath C:\wamp\bin\mongodb\data
    http://localhost:27017/

other
-------
“x86-64”，有时会简称为“x64”，是64位微处理器架构及其相应指令集的一种，也是Intel x86架构的延伸产品。
编程语言数据结构 映射 散列 字典 (?)

php
------
Thread Safety   enabled // 表示php是ts版

1.30
=======
MongoDB
-------
cursor
    In the mongo shell, the primary method for the read operation is the db.collection.find() method. This method queries a collection and returns a cursor to the returning documents.
set the noTimeout flag
    var myCursor = db.collection.find().addOption(DBQuery.Option.noTimeout);
create indexs
db.collection.ensureIndex( { type: 1 } )

    All write operations in MongoDB are atomic on the level of a single document.
insert
    db.collection.insert()
    multi:true // 多条
    upsert:true // 没数据则插入 (mysql 的replace)
remove
    db.collection.remove()
find
    $in $lt $or

other
-------
LXC为Linux Container的简写

1.31
=======
BLL - Business Logic Layer // 业务逻辑层
USL - User Show Layer // 表示层
DAL - Data Access Layer // 数据访问层
SVG 指可伸缩矢量图形 (Scalable Vector Graphics)

时间点数据 // 可变化的数据

数据的关联关系
--------------
关联关系
    通常我们所说的关联关系包括下面三种：
    一对一关联 ：ONE_TO_ONE，包括HAS_ONE和BELONGS_TO
    一对多关联 ：ONE_TO_MANY，包括HAS_MANY和BELONGS_TO
    多对多关联 ：MANY_TO_MANY
    关联关系必然有一个参照表

php
------
php.ini
    register_globals = On/Off // 是否注册为全局变量(默认关闭)
    session.cookie_lifetime = 0 // 它告知浏览器不要持久化存储 cookie 数据。 也即，关闭浏览器的时候，会话 ID cookie 会被立即删除
session_start(); // 启动新会话或者重用现有会话
session_regenerate_id(); // 生成新的会话id(内容不变)
session_unset(); // Free all session variables
session_write_close(); // Write session data and end session // 之后的session操作将不起作用
session_id(); // 获取/设置当前会话id

mysql
--------
mysql 中varchar内容开头用1到2个字节表示实际长度(所以最大长度65535-3(是否为空+长度))
5.0版本以上varchar() 括号中的内容表示字符数
非空CHAR的最大总长度是255【字节】
