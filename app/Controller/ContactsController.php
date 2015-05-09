<?php
App::uses('AdminController', 'Controller');

class ContactsController extends AdminController
{
	public $controller = 'Contacts';
	public $model = 'Contact';

	public function beforeFilter()
	{
		parent::beforeFilter();
		$this->Auth->allow('index','thanks');
	}

	public function index(){
		$this->set('title_for_layout','Contact Us');
		$this->set('page','contact_us');
		$this->set('curr_page','contact');

		if(!empty($this->data)){
			if(!empty($this->data['name']) &&
				!empty($this->data['email']) &&
				!empty($this->data['message']) ){

				$this->Contact->set($this->data);
				if($this->Contact->validates()){
					App::uses('CakeEmail', 'Network/Email');

					$Email = new CakeEmail();
					$Email->from(array($this->data['email'] => $this->data['name']));
					//$Email->to('kristinandtawin@gmail.com');
					$Email->to('kristinandtawin@gmail.com');
					$Email->subject('Contact Us Form - kristinandtawin.com');
					$Email->send($this->data['message']);

					$this->redirect('/contacts/thanks');
				}
			}
		}
	}

	public function thanks(){
		$this->set('title_for_layout','Contact Us');
		$this->set('page','contact_us');
		$this->set('curr_page','contact');
	}
}