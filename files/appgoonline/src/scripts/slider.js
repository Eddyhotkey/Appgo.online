'use strict';

document.addEventListener( 'DOMContentLoaded', function ( ) {
	let swiper = new Swiper(".mySwiper", {
		spaceBetween: 8,
		slidesPerView: 3,
		freeMode: true,
		watchSlidesProgress: true,
	});
	let swiper2 = new Swiper(".mySwiper2", {
		//spaceBetween: 10,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		thumbs: {
			swiper: swiper,
		},
	});

	let malta_swiper = new Swiper(".rsce_malta__swiper", {
		slidesPerView: 1,
		spaceBetween: 40,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		breakpoints: {
			768: {
				slidesPerView: 3,
				spaceBetween: 40,
			},
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
	});
});


