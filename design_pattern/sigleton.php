<?php
/* 单例模式 */
class Sigleton {
	static private $_instance = null;

	private function __construct() {

	}

	public static function getInstance() {
		if (!self::$_instance) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}
}

/* test */
$obj1 = Sigleton::getInstance();
$obj2 = Sigleton::getInstance();

var_dump($obj1 === $obj2);

/* 可以创建多个实例的单件模式 */
class User{ // 为每个user创建一个实例
	static private $_instance = array();
	private $_uid;

	private function __construct($uid) {
		$this->_uid = $uid;
	}

	public static function getInstance($uid) {
		if (!isset(self::$_instance[$uid])) {
			self::$_instance[$uid] = new self($uid);
		}

		return self::$_instance[$uid];
	}
}

$user1 = User::getInstance('mrsu');
$user2 = User::getInstance('mrsu');

var_dump($user1 === $user2);
