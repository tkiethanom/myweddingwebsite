$(document).ready(function(){
	Gallery.resize();
	$(window).on("throttledresize", function (event) {
		Gallery.resize();
	});

	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
});

var Gallery = {};

Gallery.resize = function(){
	w = $('.gallery-image').width();

	$('.gallery-image').css('height', w);
};