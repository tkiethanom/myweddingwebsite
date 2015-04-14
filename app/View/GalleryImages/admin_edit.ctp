<div class="container">
	<form action="" method="post" enctype="multipart/form-data">
		<?php echo $this->Form->input($model.'.id'); ?>
		<div class="form-group">
			<?php echo $this->Form->input('file', array('type'=>'file')); ?>
		</div>

		<?php if(!empty($this->data[$model]['filename'])): ?>
			<div class="form-group">
				<img src="/img/gallery_images/<?php echo $this->data[$model]['filename'] ?>" style="height:200px"/>
			</div>
		<?php endif; ?>

		<div class="form-group">
			<?php echo $this->Form->input($model.'.order', array('type'=>'text','size'=>3,'class'=>'form-control','style'=>'width:auto;')); ?>
		</div>

		<input type="submit" class="btn btn-default" value="Submit"/>
		<a class='btn btn-default' href="/admin/<?php echo $this->params['controller'] ?>" >Cancel</a>
	</form>
</div>