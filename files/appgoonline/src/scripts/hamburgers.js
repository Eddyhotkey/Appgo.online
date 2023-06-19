'use strict'
document.addEventListener( 'DOMContentLoaded', function ( event ) {

	let forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};
	// get all elements with the class "hamburger"
	let hamburgers = document.querySelectorAll(".hamburger");
	// check if these elements are on the page
	if (hamburgers.length > 0) {
		// Add a "click" event handler for each element with the "hamburger" class
		forEach(hamburgers, function(hamburger) {
			// When you click on the "hamburger" element, switch its "is-active" class
			hamburger.addEventListener("click", function() {
				this.classList.toggle("is-active");
			}, false);
		});
		// Add a "click" event handler for the entire document
		document.addEventListener( 'click', function (event) {
			let target = event.target;
			let isHamburger = false;
			// check if the click was made inside an element with the class "hamburger"
			while ( target !== null ) {
				if( target.classList && target.classList.contains( 'hamburger' ) ) {
					isHamburger = true;
					break;
				}
				target = target.parentNode;
			}
			// If the click was made outside an element with the class "hamburger", remove the "is-active" class from all elements with this class
			if ( !isHamburger ) {
				forEach( hamburgers, function ( hamburger ) {
					hamburger.classList.remove( 'is-active' );
				});
			}
		});
	}
});
