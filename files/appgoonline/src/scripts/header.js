'use strickt';

document.addEventListener('DOMContentLoaded', function () {
	/* 1. Desktop header animation; */

// Get the header element
	const header = document.querySelector('header');

// Variable to store the previous scroll position
	let prevScrollPos = window.pageYOffset;

// Function to add the "sticky" class and apply animation
	function addStickyClass() {
		header.classList.add('sticky');
		header.style.transition = 'top 0.3s ease-in-out';
		header.style.top = '0';
	}

// Function to remove the "sticky" class and apply animation
	function removeStickyClass() {
		//header.classList.remove('sticky');
		header.style.transition = 'top 0.3s ease-in-out';
		header.style.top = `-${header.offsetHeight}px`;
	}

// Function to handle the scroll event
	function handleScroll() {
		// Get the current scroll position
		const currentScrollPos = window.pageYOffset;
		if ( window.innerWidth >= 1023 ) {
			// Check the scroll direction
			if (prevScrollPos > currentScrollPos ) {
				// Reverse scroll up
				addStickyClass();
			} else {
				// Scroll down or stay in place
				removeStickyClass();
			}
		}
		// Update the previous scroll position value
		prevScrollPos = currentScrollPos;
	}

	// Listen for the scroll event
	window.addEventListener('scroll', handleScroll);


	/* 2. Mobile header animation; */

	function addScrollClass () {
		let scroll = window.scrollY || document.documentElement.scrollTop;
		let header = document.querySelector( 'header' );

		if ( scroll >= 1 && window.innerWidth <= 1023 ) {
			header.classList.add( 'scroll' );
		} else {
			header.classList.remove( 'scroll' );
		}
	}
	window.addEventListener( 'scroll', addScrollClass );
	window.addEventListener( 'resize', addScrollClass );
});
