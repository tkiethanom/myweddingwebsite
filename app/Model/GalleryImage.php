<?php
class GalleryImage extends AppModel{

	function incrementLikes($id){
		$this->updateAll(
			array('GalleryImage.likes' => 'GalleryImage.likes+1'),
			array('GalleryImage.id' => $id)
		);
	}
}