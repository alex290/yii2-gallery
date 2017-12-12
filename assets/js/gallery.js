+ function($) {

	$('.item-image').each(function(index, el) {

		$(this).find('.item-del').click(function(event) {
			$.ajax({
				url: '/yii2gallery',
				type: 'GET',
				data: {id: $(this).attr('id'), name: $(this).attr('data-name') },
			})
			.done(function(res) {
				console.log(res);
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			$(this).parent('.item-image').remove();
		});

		
	});

}(jQuery);