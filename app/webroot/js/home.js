$(document).ready(function(){
	imagesLoaded( '#container', function() {
		resize();
	});

	$(window).on("throttledresize", function( event ) {
		resize();
	});

	setInterval(function(){
		nextGalleryItem();
	}, 4000);
});

function resize(){
	var w = $('.gallery-image').first().width();
	var h = $('.gallery-image').first().height();
	$('.gallery-container').css({'width': w,'height': h});
}

function nextGalleryItem(){
	var curr = $('.gallery-image:not(.fade)');
	$(curr).addClass('fade');

	var next = $(curr).next('.gallery-image.fade');
	if($(next).length > 0){
		$(next).removeClass('fade');
	}
	else{
		$('.gallery-image.fade').first().removeClass('fade');
	}
}