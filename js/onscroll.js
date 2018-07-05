$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll < 200) {
        $("#animated1").addClass("cache");
        $("#animated2").addClass("cache");
        $("#animated3").addClass("cache");
    }

    if (scroll >= 200) {
        $("#animated1").removeClass("cache");
        $("#animated2").removeClass("cache");
        $("#animated3").removeClass("cache");
        $("#animated1").addClass("animated bounceInRight");
        $("#animated2").addClass("animated2 bounceInRight2");
        $("#animated3").addClass("animated3 bounceInRight3");
    } else {
        $("#animated1").removeClass("animated bounceInRight");
        $("#animated2").removeClass("animated2 bounceInRight2");
        $("#animated3").removeClass("animated3 bounceInRight3");
    }
});
