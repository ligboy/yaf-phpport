<?php
class ErrorController extends \Yaf\controller_abstract {
	public function errorAction($exception) {
		$this->getView()->assign("exception", $exception);
	}

}
