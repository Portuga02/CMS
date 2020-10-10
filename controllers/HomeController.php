<?php
class HomeController extends controller {

	public function index() {
		$dados = array();
		$this->loadTemplate('home', $dados);
	}
}
