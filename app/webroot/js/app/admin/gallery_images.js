$(document).ready(function(){
	$("table.sortable").sortable({
		cursor: "move",
		handle: ".handle",
		items: "tbody tr",
		helper: "clone",
		placeholder: "sortable-placeholder",
		update: function(){
			AdminGalleryImages.sendReorder();
		}
	});

	$(document).on('change','.order-input', function(){
		AdminGalleryImages.sendSetOrder($(this));
	});
});

AdminGalleryImages = {};

AdminGalleryImages.sendReorder = function(elem){
	var $data = $('table.sortable').sortable('serialize');

	$.ajax({
		method: "POST",
		url: "/admin/galleryImages/reorder",
		data: $data
	})
	.done(function( msg ) {

	});
};

AdminGalleryImages.sendSetOrder = function(elem){
	$id = $(elem).parents('tr').first().find('.id-input').val();
	$val = $(elem).val();

	$.ajax({
		method: "POST",
		url: "/admin/galleryImages/setOrder/"+$id,
		data: { 'data[order]': $val  }
	})
	.done(function( msg ) {

	});
};