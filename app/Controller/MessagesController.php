<?php
App::uses('AppController','Controller');
App::uses('CakeEmail','Network/Email', 'Session');
/**
 * Messages Controller
 *
 * @property Message $Message
 */
class MessagesController extends AppController {
	
	public $components = array('Session');
	
	public function index(){
		$this->set('menu', 'kontakt');
		if($this->request->is('post')){
			$this->Message->create();
			if($this->Message->save($this->request->data)){
				//$message = $this->request->data['name'].'\nfra email: '.$this->request->data['email'].'\nbesked: '.$this->request->data['message'].'\n';
				//$Email = new CakeEmail();
				//$Email->from(array('kontakt@fenus.dk' => 'Fenus.dk'));
				//$Email->to('nederby@gmail.com');
				//$Email->subject('Ny bedsked fra fenus.dk');
				//$Email->send($message);
				$this->Session->setFlash(__('Tak for din henvendelse, vi vil vende tilbage hutigt muligt.'));
			}else{
				$this->Session->setFlash(__('Der skete en fejl, prøv venligst igen.'));
			}
		}
	}
}
