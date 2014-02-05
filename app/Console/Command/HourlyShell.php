<?php
class HourlyShell extends AppShell {

	public $tasks = array('Trustpilot');
	
	public function main() {
		$this->Trustpilot->save();
	}
	
}
?>