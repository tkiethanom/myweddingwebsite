$(document).ready(function() {
	Navbar.resize();
	$(window).on("throttledresize", function (event) {
		Navbar.resize();
	});
});

var Navbar = {};

Navbar.resize = function(){
	var w = $('.navbar-header .branding').width();
	var window_w = window.innerWidth;
	var left = (window_w - w)/2;

	$('.navbar-header .branding').css('left',left);
};