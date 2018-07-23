// Wrap every letter in a span
$('.ml10 .letters').each(function(){
  $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});

anime.timeline({loop: true})
  .add({
    targets: '.ml10 .letter',
    rotateY: [-90, 0],
    duration: 1000,
    delay: function(el, i) {
      return 80 * i;
    }
  }).add({
    targets: '.ml10',
    opacity: 0,
    duration: 100,
    easing: "easeOutExpo",
    delay: 3000
  });
