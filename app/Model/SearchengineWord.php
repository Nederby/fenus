<?php
App::uses('AppModel', 'Model');
/**
 * SearchengineWord Model
 *
 * @property SearchengineLinkword $SearchengineLinkword
 * @property SearchengineWordlocation $SearchengineWordlocation
 */
class SearchengineWord extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'word';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'word' => array(
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'SearchengineLinkword' => array(
			'className' => 'SearchengineLinkword',
			'foreignKey' => 'searchengine_word_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'SearchengineWordlocation' => array(
			'className' => 'SearchengineWordlocation',
			'foreignKey' => 'searchengine_word_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
