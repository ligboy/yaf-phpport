<?php
class TestviewController extends \Yaf\Controller_Abstract {
    public function actionAction() {
    }

    public function indexAction() {
        \Yaf\Dispatcher::getInstance()->disableView();
        $this->forward("dummy");
    }

    public function dummyAction() {
        \Yaf\Dispatcher::getInstance()->enableView();
    }
}