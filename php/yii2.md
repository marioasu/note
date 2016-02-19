yii2的数据库操作
=================

一.数据库访问 Data Access Objects
--------------
通过 yii\db\Command 执行SQL查询
通过 yii\db\Connection 或者 \yii\db\Query 创建$command (createCommand())
	$command->queryOne();
	$command->queryAll();
	$command->queryColumn();
	$command->queryScalar();
	$command->execute(); // 不返回数据

二.查询生成器 Query Builder
--------------
创建(new) \yii\db\Query 对象来配置查询条件
查询方法
	$query->one();
	$query->all();
	$query->column();
	$query->scalar();
	$query->exists();
	$query->count();

三. 活动记录 Active Record
-------------
通过 yii\db\ActiveRecord::find() 返回 yii\db\ActiveQuery 对象
配置查询条件 -- 和 Query Builder 的配置方法相同
	$ar->save(); // yii\db\Command insert/update 取决于AR对象是 new新建还是查找出来的(存在 isNewRecord 属性中)
	$ar = new static([k=>v,...]);
	$ar->save();

	$ar->delete(); // 先查找出ar对象
	AR::deleteAll($condition);

	$ar->updateCounters(['column' => 'num']); // 修改counter columns
	AR::updateAll($attributes, $condition);
	
	$aq = AR::find();
	$ar =
		$aq->one();
		$aq->all();
		$aq->count();

方法名参考
	create/add/set/findBy.../delete/getXxxNum

通过主键查找的快捷方式 -- 参数可以是 a scalar value/an array of scalar values/an associative array (前两种方式为主键的快捷查找)
	yii\db\ActiveRecord::findOne();
	yii\db\ActiveRecord::findAll();
	yii\db\ActiveRecord::findBySql(); // 通过 raw sql 生成 yii\db\ActiveQuery

Optimistic Locks ?...

四. 关联数据
	hasOne()
	hasMany()
	->inverseOf('table_name'); // 添加inverse relations

	with('table1'[, 'table2', ...]) // eager loading (适用于不传参数的get方法,内部直接用IN查询出所有关联数据)

五. 查询条件
	三种格式
	string format, e.g. 'status=1'
	hash format, e.g. ['status' => 1, 'type' => 2]
		['id' => [4, 8, 15],...] 相当于 in
	operator format, e.g. ['like', 'name', 'test']
		['like/or like/or not like', 'name', ['tom', 'jerry']] 相当于 like %tom% and/or/or not like %jerry%
		['and/or', 'string1', 'string2']
		['between/not between', 'id', '1', 10]
		['in/not in', 'id', ['1', '2', '3']]
		['> / < / >= / <=', 'age', 10]
