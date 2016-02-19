yii2的数据库操作
=================
一. query方法
	$Model = new \Think\Model() 
	$Model->query('sql')
	$Model->execute()

二. 活动记录 Active Record
AR 数据存放在 protected data 数组里面

通过 M('Model') D('Model') 实例化 M方法不支持真实表名等设置
	$ar->attr = val;
	$ar->add();
	
	add($data='',$options=array(),$replace=false) // replace 替换字段需要有主键或联合唯一主键 用于确定唯一性

	$ar->save(); // 返回修改条数
	$ar->where($where)->data->($data)->save();

	$ar->where();
	$ar->find();
	$ar->getField('field', 'limit'); // 可以返回指定条一维数组

快捷查找
	没查到数据返回null
	$ar->find('pk');

三. 查询条件
	strings format 同 yii
	hash format -- hash key => 表达式
		$where['field'] = 'xxx' (快捷写法) 等同于 $where['field'] = ['eq', 'xxx']
		表达式查询
		eq
		neq
		gt
		egt
		lt
		elt
		notlike
		like
		in 元素2 为数组
		not in 元素2 为数组
		between 元素2 为数组
		not between/notbetween 元素2 为数组
			表示区间
			eg. $where['field'] = [['gt', 'num1'], ['lt', 'num2']] -- field > num1 and field < num2
			$where['field'] = [[exp1], [exp2], [exp3]... 'and/or']
		
		统计
			$ar->count('field'/null)
			$ar->max('field');
			$ar->min('field');
			$ar->avg('field');
			$ar->sum('field');

	复合查询
		$where['field1'] = ['exp', 'param']
		$where['field2'] = ['exp', 'param']
		$where['_logic'] = 'or'
		$hash['_complex'] = $where;
		$hash['fieldx'] = ['exp', 'param']
		$hash ...
