<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {

	public function indexAction() {
		$result = $this->model->getNews(); // Аз мадел БД чиро мегиред
		$Student = $this->model->rowUsers(); // Аз мадел main ҳаммаи студентҳоро мегирад



		//Чикор мекунед

		$vars = [
			'news' => $result,
			'student' => $Student,
		];


		$this->view->render('Главная страница', $vars);// Дар экрани ползвател медихад
	}

}