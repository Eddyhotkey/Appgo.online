'use strict';

$( document ).ready( function () {
	$('.rsce_argentina__col_main').hover( function () {
		let argentina_text = $( this ).find( '.rsce_argentina__text' );
		$( this ).toggleClass( 'active' );
		argentina_text.slideToggle();
	});
});