$(document).ready(function() {
	$("header a").click(function() {
		$("html, body").stop().animate({
			scrollTop: $($.attr(this, "href")).offset().top - 60
		}, 800);
		$("header li").removeClass("active");
		$(this).parent("li").toggleClass("active");
	});
	
	$(document).scroll(function() {
		if (!$("body").is(":animated")) {
			var top = window.pageYOffset;
			var home = parseInt($("#home").css("height").replace(/[^-\d\.]/g, ''));
			var about = home + parseInt($("#about").css("height").replace(/[^-\d\.]/g, ''));
			var projects = about + parseInt($("#projects").css("height").replace(/[^-\d\.]/g, ''));

			$("header li").removeClass("active");
			
			if (top > projects - (projects-about)/2) {
				history.replaceState({}, null, "#contact");
				$("#a-contact").toggleClass("active");
			}
			else if (top > about - (about-home)/2) {
				history.replaceState({}, null, "#projects");
				$("#a-projects").toggleClass("active");
			}
			else if (top > home - home/2) {
				history.replaceState({}, null, "#about");
				$("#a-about").toggleClass("active");
			}
			else {
				history.replaceState({}, null, "#home");
				$("#a-home").toggleClass("active");
			}
		}
	});
});