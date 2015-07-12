<?php

class InitController extends Yaf_Controller_Abstract {

	public function init() {
		$siteModel = new SiteModel();
		$this->getView()->assign('title', $siteModel->getBlogTitle());
	}

}