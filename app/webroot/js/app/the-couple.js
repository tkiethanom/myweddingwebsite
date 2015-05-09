$(document).ready(function(){

	TheCouple.resize();
	$(window).on("throttledresize", function (event) {
		TheCouple.resize();
	});
});

var TheCouple = {};

TheCouple.resize = function(){
	if($('.couple-container').length > 0){
		$('.couple-container .person .inner').css('height','auto');
		if (!window.matchMedia("(max-width: 768px)").matches) {

			var highest = 0;
			$('.couple-container .person .inner').each(function(){
				if(highest < $(this).innerHeight()){
					highest = $(this).innerHeight();
				}
			});

			$('.couple-container .person .inner').css('height', highest);
		}
	}
};