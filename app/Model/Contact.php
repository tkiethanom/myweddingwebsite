<?php
class Contact extends AppModel{

	public $useTable = false;

	public $validate = array(
		'name' => array('rule'=>'notEmpty'),
		'email' => array(
			array(
				'rule'=>'notEmpty',
				'message'=>'This field is required.',
			),
			array(
				'rule'=>'email',
				'message'=>'Invalid email address.',
			),
		),
		'message'=>array('rule'=>'notEmpty')
	);

}