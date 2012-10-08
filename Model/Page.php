<?php

class Page extends AppModel {
    public $name = 'Page';

	public $validate = array(
		'bookId' => array(
			'ruleNotEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Required'
			)
		), 
		'pageNumber' => array(
			'rule' => 'notEmpty'
		));
	}
?>