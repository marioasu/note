<?php
/* 简单工厂模式 */
abstract Class BMW {
	function __construct($p) {

	}
}

class BMW320 extends BMW {
	public function __construct($pa) {
		
	}
}

class BMW523 extends BMW {
	public function __construct($pb) {

	}
}

class Factory {
	static function createBMW($type) {
		switch ($type) {
			case 320:
				return new BMW320();
				break;

			case 523:
				return new BMW523();
				break;
			
			default:
				# code...
				break;
		}
	}
}

class Customer {
	private $BMW;

	function getBMW($type) {
		$this->BMW = Factory::createBMW($type);
	}
}
