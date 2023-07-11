'use strict';

$(document).ready(function() {
	$('.rsce_monaco__item_button').click(function() {
		let button = $(this);
		let monaco_container = button.closest('.rsce_monaco__container');
		let monaco_texts = monaco_container.find('.rsce_monaco__item_text');
		let monaco_text = button.parent().siblings('.rsce_monaco__item_text');

		monaco_texts.slideUp();
		if (monaco_text.is(':hidden')) {
			monaco_text.slideDown();
			$('.rsce_monaco__item_button').removeClass('active');
			button.addClass('active');
		} else {
			monaco_text.slideUp();
			button.removeClass('active');
		}
	});
});