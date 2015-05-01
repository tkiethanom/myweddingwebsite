$(document).ready(function(){
	$(document).on('click','.todo-list a', function(e){
		e.preventDefault();
		if(!$(this).hasClass('active')){
			$('.todo-list a.active').removeClass('active');
			$(this).addClass('active');
			var id = $(this).attr('data-id');
			$('.todo').hide();
			$('#'+id).fadeIn(1000);
		}
	});
});