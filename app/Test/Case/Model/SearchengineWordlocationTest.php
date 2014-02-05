<?php
App::uses('SearchengineWordlocation', 'Model');

/**
 * SearchengineWordlocation Test Case
 *
 */
class SearchengineWordlocationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.searchengine_wordlocation',
		'app.searchengine_url',
		'app.searchengine_word',
		'app.searchengine_linkword'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SearchengineWordlocation = ClassRegistry::init('SearchengineWordlocation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SearchengineWordlocation);

		parent::tearDown();
	}

}
