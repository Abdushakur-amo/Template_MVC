<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller {

	public function loginAction() {

		$result = $this->model->getLogin();
		$vars = [
			'row' => $result,
		];
		$this->view->render('Вход', $vars);


	}

	public function registerAction() {
		$this->view->render('Регистрация');
	}

	public function shifAction() {
		$this->view->render('Сахифаи Новсть');
	}

}