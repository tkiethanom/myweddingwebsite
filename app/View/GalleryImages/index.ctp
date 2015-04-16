<div class="container gallery-container">
	<?php foreach($gallery_images as $i => $image): ?>
		<div class="col-xs-6 col-sm-4 col-md-3 gallery-image-container" >
			<div class="gallery-image" data-index="<?php echo $i ?>" data-id="<?php echo $image['GalleryImage']['id'] ?>" style="background-image:url(/img/gallery_images/<?php echo $image['GalleryImage']['filename'] ?>)" ></div>
		</div>
	<?php endforeach;?>
</div>

<div class="modal " id="myModal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-body">
				<div class="modal-close" data-dismiss="myModal">
					<i class="fa fa-times-circle" ></i>
				</div>
				<div class="ajax-loader" style="display:none">
					<img src="/img/ajax-loader.gif" />
				</div>
				<div class="gallery-carousel" style="opacity: 0">
					<?php foreach($gallery_images as $i => $image): ?>
						<div class="slide-container">
							<div class="slider-image-container"  data-index="<?php echo $i ?>" data-id="<?php echo $image['GalleryImage']['id'] ?>" style="display: none">
								<img class="img-responsive" src="/img/gallery_images/<?php echo $image['GalleryImage']['filename'] ?>" />
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="modal-footer">
				<div class="text-center heart-container">
					<div class="like-btn">
						<span class="love-it">Love It!</span>
						<i class="fa fa-heart like-btn"></i>
					</div>
					<span class="plus-1">+1</span>
				</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->