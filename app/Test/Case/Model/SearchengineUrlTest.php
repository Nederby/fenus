<?php
App::uses('SearchengineUrl', 'Model');

/**
 * SearchengineUrl Test Case
 *
 */
class SearchengineUrlTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.searchengine_url'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SearchengineUrl = ClassRegistry::init('SearchengineUrl');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SearchengineUrl);

		parent::tearDown();
	}

}
