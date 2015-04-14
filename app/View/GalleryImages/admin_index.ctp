<div class="container">
	<div class="actions">
		<p class="text-right">
			<a href="/admin/<?php echo $this->params['controller'] ?>/add" class="btn btn-default">
				<i class="fa fa-plus"></i> Add
			</a>
		</p>
	</div>
	<div class="index-table">
		<table class="table table-striped table-bordered table-responsive sortable">
			<thead>
			<tr>
				<th></th>
				<th>ID</th>
				<th>Image</th>
				<th>Action</th>
				<th>Order</th>
			</tr>
			</thead>
			<tbody class="">
			<?php foreach($data as $i => $row): ?>
				<tr>
					<td>
						<i class="fa fa-arrows handle"></i>
						<?php echo $this->Form->input($i.'.GalleryImage.id', array('type'=>'hidden', 'value'=>$row['GalleryImage']['id'],'class'=>'id-input')); ?>
					</td>
					<td><?php echo $row[$model]['id'] ?></td>
					<td>
						<?php if($row[$model]['filename']): ?>
							<img src="/img/gallery_images/<?php echo $row[$model]['filename'] ?>" class="img-thumbnail img-responsive" style="height:100px"/>
						<?php endif; ?>
					</td>
					<td>
						<a class="btn" href="/admin/<?php echo $this->params['controller'] ?>/edit/<?php echo $row[$model]['id'] ?>" >
							Edit <i class="fa fa-edit"></i>
						</a>
						<a class="btn" href="/admin/<?php echo $this->params['controller'] ?>/delete/<?php echo $row[$model]['id'] ?>" >
							Delete <i class="fa fa-trash"></i>
						</a>
					</td>
					<td>
						<?php echo $this->Form->input($i.'.GalleryImage.order', array('type'=>'text','value'=>$row['GalleryImage']['order'],'size'=>3,'label'=>false,'class'=>'order-input')); ?>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>