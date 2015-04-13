<?php
App::uses('AdminController', 'Controller');

class GalleryImagesController extends AdminController
{
	public $controller = 'GalleryImages';
	public $model = 'GalleryImage';

	public function beforeFilter()
	{
		parent::beforeFilter();
		$this->Auth->allow('index');
	}
}
