window.onscroll = function() {
	var intro = document.getElementById("header");
	var a = window.pageYOffset || document.documentElement.scrollTop;

	if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
		intro.style.filter = "blur(" + a / 100 + "px)";
	} else {
		intro.style.filter = "blur(0px)";
	}
};
