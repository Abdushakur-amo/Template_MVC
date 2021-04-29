<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {

	public function indexAction() {
		if( !empty($_POST) ){
			sleep(1);
			var_dump($_POST);
			exit;
		}
		$this->view->render('Главная страница');// Дар экрани ползвател медихад
	}

}