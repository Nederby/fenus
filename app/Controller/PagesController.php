<?php
App::uses('AppController', 'Controller');
App::uses('HttpSocket', 'Network/Http');
class PagesController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Pages';
	public $Component = array('CakeEmail');
/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));
		$this->render(implode('/', $path));
	}
	
	public function godtAtVide(){
		$this->set('menu', 'godt-at-vide');
	}
	public function hvadKosterEtLaan(){
		$this->set('menu', 'hvad-koster-et-laan');
	}
	public function rki(){
		$this->set('menu', 'rki');
	}
	public function hvadErEtForbrugslaan(){
		$this->set('menu', 'hvad-er-et-forbrugslaan');
	}
	
	public function proxy(){
		$this->layout = "";
		$url = urldecode($this->request->query['url']);
		
		$arr_url = explode("?",$url);
		$HttpSocket = new HttpSocket();
		$results = $HttpSocket->get($arr_url[0], $arr_url[1]);
		//var_dump($results);
		$this->set('results', $results);
	}
}
