<div class="container gallery-container">
	<?php foreach($gallery_images as $i => $image): ?>
		<div class="col-xs-6 col-sm-4 col-md-3 gallery-image-container" data-index="<?php echo $i ?>" data-id="<?php echo $image['GalleryImage']['id'] ?>">
			<div class="gallery-image"  style="background-image:url(/img/gallery_images/<?php echo $image['GalleryImage']['filename'] ?>)" ></div>
			<div class="gallery-image-info">
				<span class="like-count"><?php echo $image['GalleryImage']['likes'] ?></span> <i class="fa fa-heart"></i>
			</div>
		</div>
	<?php endforeach;?>
</div>

<div class="modal " id="myModal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<div class="text-center heart-container">
					<div class="like-btn">
						<span class="love-it">Love It!</span>
						<i class="fa fa-heart-o"></i>
						<i class="fa fa-heart"></i>
					</div>
					<span class="plus-1">+1</span>
				</div>
				<div class="modal-close" data-dismiss="myModal"><i class="fa fa-times-circle" ></i></div>
			</div>
			<div class="modal-body">

				<div class="ajax-loader" style="display:none">
					<img src="/img/ajax-loader.gif" />
				</div>
				<div class="gallery-carousel" style="opacity: 0">
					<?php foreach($gallery_images as $i => $image): ?>
						<?php
							$liked = 0;
							if(!empty($session['likes'][$image['GalleryImage']['id']]) ){
								$liked = 1;
							}
						?>
						<div class="slider-image-container" data-liked="<?php echo $liked?>"  data-index="<?php echo $i ?>" data-id="<?php echo $image['GalleryImage']['id'] ?>" style="display: none">
							<img class="img-responsive" src="/img/gallery_images/<?php echo $image['GalleryImage']['filename'] ?>" />
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->