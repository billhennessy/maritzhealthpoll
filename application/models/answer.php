<?php namespace Model;

/* This basic model has been auto-generated by the Gas ORM */

use \Gas\Core;
use \Gas\ORM;

class Answer extends ORM {
	
	public $primary_key = 'id';

	function _init()
	{
			 self::$relationships = array (
                        'question'          =>     ORM::belongs_to('\\Model\\Question'),
						'response'          =>     ORM::has_many('\\Model\\Response')
                );
		
		self::$fields = array(
			'id' => ORM::field('auto[11]'),
			'question_id' => ORM::field('int[11]'),
			'order' => ORM::field('char[2]'),
			'text' => ORM::field('char[500]'),
		);

	}
}