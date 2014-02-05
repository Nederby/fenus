<?php
App::uses('AppController', 'Controller');
/**
 * Ads Controller
 *
 * @property Ad $Ad
 */
class AdsController extends AppController {

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout = false;
		$this->Ad->id = $id;
		if (!$this->Ad->exists()) {
			throw new NotFoundException(__('Invalid ad'));
		}
		$this->set('ad', $this->Ad->read(null, $id));
	}
	
	public function show_ad(){
		$this->layout = false;
		$ad = $this->Ad->find('first', array(
			'conditions' => array('id' => 2)
		));
		
		$this->set('ad', $ad);
	}
	
	public function test_ad() {
		$this->layout = false;
	}

}
