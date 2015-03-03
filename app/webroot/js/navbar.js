$(document).ready(function() {
	Navbar.resize();
	$(window).on("throttledresize", function (event) {
		Navbar.resize();
	});
});

var Navbar = {};

Navbar.resize = function(){
	var w = $('.navbar-header .branding').width();
	var window = $(document).width();
	var left = (window - w)/2;

	$('.navbar-header .branding').css('left',left);
};