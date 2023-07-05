'use strict';

$(document).ready(function() {
	$('.rsce_japan__item_button').click(function() {
		let button = $(this);
		let japan_container = button.closest('.rsce_japan__container');
		let japan_texts = japan_container.find('.rsce_japan__item_text');
		let japan_text = button.parent().siblings('.rsce_japan__item_text');

		japan_texts.slideUp();
		if (japan_text.is(':hidden')) {
			japan_text.slideDown();
			$('.rsce_japan__item_button').removeClass('active');
			button.addClass('active');
		} else {
			japan_text.slideUp();
			button.removeClass('active');
		}
	});
});
