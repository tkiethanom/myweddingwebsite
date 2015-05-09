<?php
App::uses('AdminController', 'Controller');

class GalleryImagesController extends AdminController
{
	public $controller = 'GalleryImages';
	public $model = 'GalleryImage';

	public function beforeFilter()
	{
		parent::beforeFilter();
		$this->Auth->allow('index','like');
	}

	public function admin_index(){
		$this->layout = 'admin';

		$this->Paginator->settings = array(
			'limit'=>25,
			'order'=>array('ISNULL('.$this->model.'.order)' => 'DESC', $this->model.'.order'=>'ASC', $this->model.'.id'=>'ASC')
		);
		$data = $this->Paginator->paginate(
			$this->model,
			array()
		);

		$this->set('data', $data);
		$this->set('jsIncludes',array('app/admin/gallery_images'));
	}

	public function admin_add(){
		$this->layout = 'admin';
		$this->set('title_for_layout',Inflector::humanize($this->controller).' Add');

		if (!empty($this->data) && $this->data['file']['error'] == 0) {
			$last = $this->{$this->model}->find('first', array('order'=>array($this->model.'.order'=>'DESC') ) );
			if(!empty($last) && !empty($last[$this->model]['order'])){
				$this->request->data[$this->model]['order'] = $last[$this->model]['order'] + 1;
			}
			else{
				$this->request->data[$this->model]['order'] = 1;
			}

			$this->{$this->model}->create();
			if ($this->{$this->model}->save($this->data)) {

				$ext = pathinfo($this->data['file']['name'], PATHINFO_EXTENSION);
				$target_path = WWW_ROOT."img/gallery_images/";
				$target_path = $target_path . "image_".$this->{$this->model}->id.".".$ext;

				if(move_uploaded_file($this->data['file']['tmp_name'], $target_path)) {
					$this->{$this->model}->save(array('filename'=>"image_".$this->{$this->model}->id.".".$ext));

					$this->Session->setFlash(__('Add Successful.'),'default',array('class'=>'success') );
					return $this->redirect(array('action' => 'index'));
				} else{
					$this->Session->setFlash(__('There was an error during upload.'),'default',array('class'=>'error') );
				}
			}
			else{
				$this->Session->setFlash(__('Add Failed.'),'default',array('class'=>'error') );
				return $this->redirect(array('action' => 'index'));
			}
		}
	}

	public function admin_edit($id){
		$this->layout = 'admin';
		$this->set('title_for_layout',Inflector::humanize($this->controller).' Edit');

		if(!empty($id)){
			$data = $this->{$this->model}->find('first', array('conditions'=>array($this->model.'.id'=>$id)));

			if(!empty($data)){
				if(!empty($this->data)){
					if (!empty($this->data) && $this->data['file']['error'] == 0) {

						$ext = pathinfo($this->data['file']['name'], PATHINFO_EXTENSION);
						$target_path = WWW_ROOT."img/gallery_images/";
						$target_path = $target_path . "image_".$id.".".$ext;
						$this->request->data[$this->model]['filename'] = "image_".$id.".".$ext;

						if ($this->{$this->model}->save($this->data)) {
							if(move_uploaded_file($this->data['file']['tmp_name'], $target_path)) {

								$this->Session->setFlash(__('Edit Successful.'),'default',array('class'=>'success') );
								return $this->redirect(array('action' => 'index'));
							} else{
								$this->Session->setFlash(__('There was an error during upload.'),'default',array('class'=>'error') );
							}
						}
						else{
							$this->Session->setFlash(__('Edit Failed.'),'default',array('class'=>'error') );
							return $this->redirect(array('action' => 'index'));
						}
					}
				}
				else{
					$this->request->data = $data;
				}
			}
			else{
				$this->Session->setFlash(__(Inflector::humanize($this->model).' could not be found.'),'default',array('class'=>'error') );
				return $this->redirect(array('action' => 'index'));
			}
		}
	}

	function index(){
		$this->set('title_for_layout','Gallery');
		$this->set('curr_page','gallery');
		$this->set('page','gallery');
		$this->set('jsIncludes',array('app/gallery'));

		$gallery_images = $this->GalleryImage->find('all', array('order'=>array('GalleryImage.order'=>'ASC')));

		$this->set('gallery_images', $gallery_images);

		$session = $this->Session->read('GalleryImages');
		$this->set('session', $session);
	}

	function like(){
		$output = array('success'=>false, 'errors'=>array());

		if(!empty($this->data['id'])){
			$session = $this->Session->read('GalleryImages.likes.'.$this->data['id']);

			if(empty($session) )
			{
				$this->GalleryImage->incrementLikes($this->data['id']);
				$this->Session->write('GalleryImages.likes.'.$this->data['id'], true);

				$output['success'] = true;
			}
			else{
				$output['errors'][] = 'Already liked.';
			}
		}

		header('Content-Type: application/json');
		echo json_encode($output);
		exit;
	}
}
