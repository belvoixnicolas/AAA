window.onscroll = function() {
	var header = document.getElementById("header");
	var a = window.pageYOffset || document.documentElement.scrollTop;

	if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
		header.style.filter = "blur(" + a / 100 + "px)";
	} else {
		header.style.filter = "blur(0px)";
	}
};
