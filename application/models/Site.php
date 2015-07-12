<?php
class SiteModel extends BaseModel{
	public function getBlogTitle(){
		$blogTitle = self::$redis->get("blog_title");
		$config = Yaf_Application::app()->getConfig();
		if(!$blogTitle){
			$blogTitle = $config['blog_title'];
		}
		return $blogTitle;
	}
}
