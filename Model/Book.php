<?php

class Book extends AppModel {
    public $name = 'Book';
	public $hasMany = array(
		'Page' => array(
			'className' => 'Page',
			'conditions' => array('Page.book_id' => '1'),
			'order' => 'Page.id ASC'
		)
	);
	

	public $validate = array(
		'title' => array(
			'ruleNotEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Required'
			),
			'ruleRange' => array(
				'rule' => array('minLength', 5),
				'message' => 'Must be at least 5 characters.'
			)
		), 
		'coverImage' => array(
			'rule' => 'notEmpty'
		),
		'description' => array(
			'ruleNotEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Required'
			)
		),
		'price' => array(
			'ruleNotEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Required'
			)
		),
		'language' => array(
			'ruleNotEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Required'
			)
		));
}

?>