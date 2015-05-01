<div class="contact-container container">
	<div class="row">
		<div class=" col-sm-8 col-md-8 col-sm-push-2 col-md-push-2">
			<p class="form-info text-center">
				Have questions or want to send some love to the bride and groom?
			</p>
			<form action="" method="post">
				<div class="form-group">
					<?php echo $this->Form->input('name', array('class'=>'form-control', 'required'=>true)); ?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('type'=>'email', 'class'=>'form-control', 'required'=>true)); ?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('message', array('type'=>'textarea', 'class'=>'form-control', 'required'=>true)); ?>
				</div>

				<input type="submit" class="btn btn-default" value="Submit"/>
			</form>
		</div>
	</div>
</div>
