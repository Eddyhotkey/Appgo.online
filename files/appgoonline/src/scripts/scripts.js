document.addEventListener("DOMContentLoaded", function() {

	// Change font-color
	const gradientTextElements = document.querySelectorAll(".rsce_footer .mod_customnav ul.level_1 li a");

	gradientTextElements.forEach(function(element) {
		const originalText = element.textContent;
		element.setAttribute("data-text", originalText);
	});
});