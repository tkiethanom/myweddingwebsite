<div class="container">
	<form action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<?php echo $this->Form->input('file', array('type'=>'file')); ?>
		</div>

		<input type="submit" class="btn btn-default" value="Submit"/>
		<a class='btn btn-default' href="/admin/<?php echo $this->params['controller'] ?>" >Cancel</a>
	</form>
</div>