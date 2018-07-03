$("li.question").siblings().hide();

$("li.question").click(function(){
  $(this).siblings().slideToggle();

  if ($(this).children().hasClass("rotate")) {
   $(this).children().removeClass("rotate");
   $(this).children().addClass("reverse");
  } else if ($(this).children().hasClass("reverse")) {
    $(this).children().removeClass("reverse");
    $(this).children().addClass("rotate");
  } else {
    $(this).children().addClass("rotate");
  }

});
