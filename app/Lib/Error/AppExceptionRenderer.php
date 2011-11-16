<?php
App::uses('ExceptionRenderer', 'Error');

class AppExceptionRenderer extends ExceptionRenderer {
		
	protected function _getController($exception) {
		App::uses('AppErrorController', 'Controller');
		if (!$request = Router::getRequest(false)) {
			$request = new CakeRequest();
		}
		$response = new CakeResponse(array('charset' => Configure::read('App.encoding')));
		try {
			$Controller = new AppErrorController($request, $response);
		} catch (Exception $e) {
			$Controller = new Controller($request, $response);
			$Controller->viewPath = 'Errors';
		}
		return $Controller;
	}
	
}