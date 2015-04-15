<div class="container gallery-container">
	<?php foreach($gallery_images as $image): ?>
		<div class="col-xs-6 col-sm-4 col-md-3 gallery-image-container fancybox"
			 data-fancybox-href="/img/gallery_images/<?php echo $image['GalleryImage']['filename'] ?>"
			 data-fancybox-group="group"
		 >
			<div class="gallery-image " style="background-image:url(/img/gallery_images/<?php echo $image['GalleryImage']['filename'] ?>)" >

			</div>
		</div>
	<?php endforeach;?>
</div>