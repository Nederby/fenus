<?php
App::uses('AppModel', 'Model');
/**
 * SearchengineWordlocation Model
 *
 * @property SearchengineUrl $SearchengineUrl
 * @property SearchengineWord $SearchengineWord
 */
class SearchengineWordlocation extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'location';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'searchengine_url_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'searchengine_word_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'location' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'SearchengineUrl' => array(
			'className' => 'SearchengineUrl',
			'foreignKey' => 'searchengine_url_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SearchengineWord' => array(
			'className' => 'SearchengineWord',
			'foreignKey' => 'searchengine_word_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
