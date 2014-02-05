<?php
App::uses('SearchengineWordsController', 'Controller');

/**
 * SearchengineWordsController Test Case
 *
 */
class SearchengineWordsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.searchengine_word',
		'app.searchengine_linkword',
		'app.searchengine_wordlocation',
		'app.searchengine_url',
		'app.searchengine_link'
	);

}
