<?php
/**
 * @name IndexController
 * @author taylor
 * @desc 默认控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class IndexController extends InitController {

	/** 
     * 默认动作
     * Yaf支持直接把Yaf_Request_Abstract::getParam()得到的同名参数作为Action的形参
     * 对于如下的例子, 当访问http://yourhost/tblog/index/index/index/name/taylor 的时候, 你就会发现不同
     */
	public function indexAction() {
		//1. fetch query
		
		$postAction = new PostModel();
		$name = "taililong";
		//3. assign
		$this->getView()->assign("content", "ok");
		$this->getView()->assign("name", $name);

		//4. render by Yaf, 如果这里返回FALSE, Yaf将不会调用自动视图引擎Render模板
        return TRUE;
	}
}
