<?php
/* 工厂方法模式 */

/* 产品类 */
abstract Class BMW { // 抽象产品角色(由抽象类实现)
	function __construct() {

	}
}

class BMW320 extends BMW { // 具体产品角色(由具体类实现)
	public function __construct() {
		
	}
}

class BMW523 extends BMW {
	public function __construct() {

	}
}

/* 创建工厂类 */
interface FactoryBMW { // 抽象工厂角色(由接口实现)
	function createBMW();
}

class FactoryBMW320 implements FactoryBMW { // 具体工厂角色(由具体类实现) - 具体工厂可以是一个简单工厂
	function createBMW() {
		return new BMW320();
	}
}

class FactoryBMW523 implements FactoryBMW {
	function createBMW() {
		return new BMW523();
	}
}

/* 客户类 */
class Customer {
	private $BMW;

	function getBMW($type) {
		switch ($type) {
			case 320:
				$BMW320Fac = new FactoryBMW320();
				$this->BMW = $BMW320Fac->createBMW();

			case 523:
				$BMW523Fac = new FactoryBMW523();
				$this->BMW = $BMW523Fac->createBMW();
		}
	}
}

/* test */
$class = new ReflectionClass('FactoryBMW320');
var_dump($class);
$instance = $class->newInstanceArgs();
var_dump($instance);
var_dump($instance->createBMW());

$instance2 = new FactoryBMW320();
var_dump($instance2);
