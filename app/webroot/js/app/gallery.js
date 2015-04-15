$(document).ready(function(){
	Gallery.resize();
	$(window).on("throttledresize", function (event) {
		Gallery.resize();
	});
});

var Gallery = {};

Gallery.resize = function(){
	w = $('.gallery-image').width();

	$('.gallery-image').css('height', w);
};