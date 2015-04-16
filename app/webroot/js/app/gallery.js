$(document).ready(function(){
	Gallery.resize();
	$(window).on("throttledresize", function (event) {
		Gallery.resize();
	});

	$(document).on('click','.modal-close', function(){
		$('#myModal').modal('hide');
	});

	$(document).on('click','.gallery-image', function(){
		$('.gallery-image.selected').removeClass('selected');
		$(this).addClass('selected');

		$('#myModal').modal();
	});

	$(document).on('click','.like-btn', function(){
		if(!$(this).hasClass('clicked')){
			$(this).addClass('clicked');
			var target = $(this).siblings('.plus-1').first();
			$(target).addClass('active');
			setTimeout(function(){
				$(target).removeClass('active');
			}, 750);

			$('.gallery-carousel').slick('slickCurrentSlide');
		}
	});

	$('#myModal').on('show.bs.modal', function(){
		var wh = $(window).height();
		$('.modal-dialog').css('max-height', wh - 90);
		$('.gallery-carousel img').css('max-height', wh - 170);
		$('#myModal .ajax-loader').show();

		var index = $('.gallery-image.selected').attr('data-index');
		$('.slider-image-container[data-index="'+index+'"]').show();
	});

	$('#myModal').on('shown.bs.modal', function (e) {
		if($('.gallery-carousel').hasClass('slick-initialized')){
			$('.gallery-carousel').slick('destroy');
		}

		$('.gallery-carousel').slick({
			dots: false,
			slidesToShow: 1,
			infinite: true,
			adaptiveHeight: true
		});

		$('#myModal .ajax-loader').hide();
		$('#myModal .gallery-carousel').css('opacity',1);
		$('#myModal .gallery-carousel .slider-image-container').show();

		var index = $('.gallery-image.selected').attr('data-index');
		$('.gallery-carousel').slick('slickGoTo',index, true);

		var wh = $(window).height();
		var mh = $('.modal-dialog').height();
		var diff = (wh - mh)/2
		$('.modal-dialog').css({'margin-top':diff,'margin-bottom':0})
	});

	$('#myModal').on('hide.bs.modal', function(){
		$('.slider-image-container').hide();
		$('.gallery-carousel').css('opacity', 0);
	});

	$('.gallery-carousel').on('setPosition', function(event, slick, direction){
		var wh = $(window).height();
		var mh = $('.modal-dialog').height();
		var diff = (wh - mh)/2
		$('.modal-dialog').css({'margin-top':diff,'margin-bottom':0})
	});
});

var Gallery = {};

Gallery.resize = function(){
	w = $('.gallery-image').width();

	$('.gallery-image').css('height', w);

	$('#myModal').modal('hide');
};