var i = 0;
var liste = $('li');

function arriver() {
    liste[i].style.display = 'grid';
    $('li img')[i].style.marginLeft = '0';
    $('li img')[i].style.marginRight = '0';
    $('li img')[i].style.display = 'none';
    
    
    $('.gauche').delay('2000').animate({opacity: '1'}, 'slow');
    $('.gauche').animate({height: '95%'}, 'slow', function() {
        $('li img').animate({width: 'toggle'}, 1000);
        $('li img').animate({left: $("li img").parent().width() /2 - $("li img").width() /2}, 'slow', function() {
            $('.gauche').animate({height: '0%'}, 'slow');
            $('.gauche').animate({opacity: '0'}, 'slow');
        });
    });

    i++;
}

arriver();


$('.droite').delay('10000').animate({opacity: '1'}, 'slow');
$('.droite').animate({height: '95%'}, 'slow', function() {
    $('li img').animate({left: $("li img").parent().width() - $("li img").width() - 40}, 'slow');
    $('li img').animate({left: $("li img").parent().width() - 40, width: 'toggle'}, 'slow', function() {
        $('.droite').animate({height: '0%'}, 'slow');
        $('.droite').animate({opacity: '0'}, 'slow', function() {liste[i - 1].style.display = 'none';});
    });
});