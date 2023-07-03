'use strict';

document.addEventListener( 'DOMContentLoaded', function () {
	let spainItems = document.querySelectorAll( '.rsce_spain__title' );

	if ( spainItems.length > 0 ) {

		if ( window.innerWidth >= 1024 ) {
			spainItems[2].nextElementSibling.classList.add( 'active' );

			spainItems.forEach( function ( spainActiveItem) {

				spainActiveItem.addEventListener( 'mouseover', function () {
					setTimeout( function () {
						this.nextElementSibling.classList.add( 'active' );

						spainItems.forEach( function ( spainInactiveItem) {
							if ( spainInactiveItem !== spainActiveItem ) {
								spainInactiveItem.nextElementSibling.classList.remove( 'active' );
							}
						});
					}.bind( this ), 300 );
				});
				/// ?????? noch mal testen....
				spainActiveItem.addEventListener('mouseleave', function(event) {
					if (!event.relatedTarget || !this.nextElementSibling.contains(event.relatedTarget)) {
						setTimeout(function() {
							this.nextElementSibling.classList.remove('active');
						}.bind(this), 300);
					}
				});
			});
		} else {
			$(document).ready(function () {
				$( '.rsce_spain__item' ).click(function () {
					console.log('test');
					let spainItemCurrent = $(this).children('.rsce_spain__text');
					let spainItemOther = $('.rsce_spain__text').not( spainItemCurrent );

					spainItemOther.slideUp(300);
					spainItemCurrent.slideToggle(300);
				});
			});
		}
	}
});

