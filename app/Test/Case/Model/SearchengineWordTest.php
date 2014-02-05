<?php
App::uses('SearchengineWord', 'Model');

/**
 * SearchengineWord Test Case
 *
 */
class SearchengineWordTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.searchengine_word',
		'app.searchengine_linkword',
		'app.searchengine_wordlocation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SearchengineWord = ClassRegistry::init('SearchengineWord');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SearchengineWord);

		parent::tearDown();
	}

}
