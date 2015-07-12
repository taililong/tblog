<?php
class BaseModel{
	protected static $redis;
	public function __construct() {
		$config = Yaf_Application::app()->getConfig();
		self::$redis = new redis();
		self::$redis->connect($config['redis']['host'],$config['redis']['port']);
	}
}