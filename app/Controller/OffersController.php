<?php
App::uses('AppController', 'Controller');
/**
 * Offers Controller
 *
 * @property Offer $Offer
 */
class OffersController extends AppController {
	
	/*public function __construct() {
		parent::__construct();
		$this->set('menu', 'a-kasser');
	}*/
	
	public function index(){
		$this->set('menu', 'forside');
		
		$offerImpressionsFields = $this->Offer->find('all', array(
			'fields' => array('impressions')
		));
		$totalImpressions = 0;
		foreach($offerImpressionsFields as $impressions){
			$totalImpressions=$totalImpressions+$impressions['Offer']['impressions'];
		}
		$this->set('totalImpressions',$totalImpressions);
		$this->set('offers', $this->Offer->find('all', array(
			'conditions' => array('open_from < NOW()', 'open_to > NOW()'),
			'order' => array('impressions DESC')
		)));
	}
	
	public function view($id){
		
		$this->set('menu', 'laes-mere');
		$offer = $this->Offer->find('first', array(
			'conditions' => array('Offer.id' => $id)				
		));
		$this->set('Offer', $offer['Offer']);
	}
	
	public function see_more($id = null){
		if($id){
			$offer = $this->Offer->find('first', array(
				'conditions' => array('Offer.id' => $id)				
			));
			
		}
		if($offer){
			//link impression count one up
			$this->Offer->updateAll(
				array('Offer.impressions' => 'Offer.impressions + 1'),
				array('Offer.id' => $id)	
			);
			//Redirect to offer
			$this->redirect($offer['Offer']['link']);
		}
	}
	
	public function overview(){
		$this->set('menu', 'laaneoversigt');
		$this->set('LoadjQRangeSlider',true);
		
		
		$offerImpressionsFields = $this->Offer->find('all', array(
			'fields' => array('impressions')
		));
		$totalImpressions = 0;
		foreach($offerImpressionsFields as $impressions){
			$totalImpressions=$totalImpressions+$impressions['Offer']['impressions'];
		}
		$this->set('totalImpressions',$totalImpressions);
		$this->set('offers', $this->Offer->find('all', array(
			'conditions' => array('open_from < NOW()', 'open_to > NOW()'),
			'order' => array('impressions DESC')
		)));
	}
	
	public function update_from_xml() {
	//d:\Sites\fenus.dk\app\Vendor\python\python searchengine.py
	//http://fenus.dk/offers/update_from_xml
		$this->layout = "";
		$dom = new DOMDocument();
		$dom->load('D:\Sites\fenus.dk\app\tmp\xml\trustpilot.xml');
		foreach ($dom->getElementsByTagName('field') as $field) {
			$this->Offer->updateAll(
				array('Offer.trustpilot_score' => $field->nodeValue),
				array('Offer.trustpilot_link' => $field->getAttribute('name'))
			);
		}
		$this->render(false);
		
	}
	
}
