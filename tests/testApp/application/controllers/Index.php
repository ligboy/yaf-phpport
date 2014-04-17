<?php

class IndexController extends \Yaf\Controller_Abstract {
	public function init() {
		$this->_view->assign(\Yaf\Registry::get("config")->common->toArray());
	}

	public function indexAction() {
        echo 'Index action'.PHP_EOL;
	}
}
