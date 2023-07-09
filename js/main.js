
// Change navigation bar color on scrolling

const header = document.querySelector("header");
const welcome = document.querySelector(".welcome");

const sectionOneOptions = {
	rootMargin: "-200px 0px 0px 0px"
};

const observer = new IntersectionObserver(function(
	entries,
	observer
) {
	entries.forEach(entry => {
		if (!entry.isIntersecting) {
			header.classList.add("nav-scrolled");
		} else {
			header.classList.remove("nav-scrolled");
		}
	});

}, sectionOneOptions);

observer.observe(welcome);

// Smooth scrolling

$(document).ready(function() {
	var scrollLink = $(".scroll");

	// Smooth scrolling
	scrollLink.click(function(e) {
		e.preventDefault();
		$("body,html").animate({
			scrollTop: $(this.hash).offset().top
		}, 1000);
	});

	// Active link switching
	$(window).scroll(function() {
		var scrollBarLocation = $(this).scrollTop();

		scrollLink.each(function() {
			var sectionOffset = $(this.hash).offset().top - 20;

			if (sectionOffset <= scrollBarLocation) {
				$(this).parent().addClass("active");
				$(this).parent().siblings().removeClass("active");
			}
		});
	});
});

