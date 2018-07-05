$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 250) {
        $("#animated1").addClass("animated bounceInRight");
        $("#animated2").addClass("animated2 bounceInRight2");
        $("#animated3").addClass("animated3 bounceInRight3");
    } else {
        $("#animated1").removeClass("animated bounceInRight");
        $("#animated2").removeClass("animated2 bounceInRight2");
        $("#animated3").removeClass("animated3 bounceInRight3");
    }
});
