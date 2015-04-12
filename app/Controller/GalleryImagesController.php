<?php
class GalleryImagesController extends AppController{

	function index(){
		$this->set('title_for_layout','Gallery');
		$this->set('page','gallery');
	}
}
