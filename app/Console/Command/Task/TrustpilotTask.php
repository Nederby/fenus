<?php
class TrustpilotTask extends Shell{
	public $uses = array('Offer');
	
	public function save() {
		//d:\Sites\a-kassevalg.dk\app\Vendor\python\python searchengine.py
		//http://a-kassevalg.dk/offers/update_from_xml
		$dom = new DOMDocument();
		$dom->load('D:\Sites\fenus.dk\app\tmp\xml\trustpilot.xml');
		foreach ($dom->getElementsByTagName('field') as $field) {
			$this->Offer->updateAll(
				array('Offer.trustpilot_score' => $field->nodeValue),
				array('Offer.trustpilot_link' => $field->getAttribute('name'))
			);
			echo $field->getAttribute('name')." ".$field->nodeValue;
		}
		
		
			
	}
}