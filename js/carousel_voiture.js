var i = 0;
var liste = $('li');

function arriver() {
    liste[i].style.display = 'grid';
    $('li img')[i].style.marginLeft = '0';
    $('li img')[i].style.marginRight = '0';
    $('li img')[i].style.display = 'none';
    $('li img')[i].style.left = '0';
    $('li img')[i].style.right = '0';

    $('#' + i +' .gauche').delay('2000').animate({opacity: '1'}, 'slow');
    $('#' + i +' .gauche').animate({height: '95%'}, 'slow', function() {
        $('#' + i +' img').animate({width: 'toggle'}, {queue: false, duration: 1000})
        .delay('710').animate({left: $('#' + i +' img').parent().width() /2 - $('#' + i +' img').width() /2}, 1000, function() {
            $('#' + i +' .gauche').animate({height: '0%'}, 'slow');
            $('#' + i +' .gauche').animate({opacity: '0'}, 'slow');
        });
    });
}

function depart() {
    var x = i - 1;
    if (x == -1) {
        x = liste.length;
    }

    $('#' + x +' .droite').animate({opacity: '1'}, 'slow');
    $('#' + x +' .droite').animate({height: '95%'}, 'slow', function() {
        $('#' + x +' img').animate({left: $('#' + x +' img').parent().width() - $('#' + x +' img').width() - 40}, {queue: false, duration: 'slow'})
        .delay('550').animate({left: $('#' + x +' img').parent().width() - 40, width: 'toggle'}, 'slow', function() {
            $('#' + x +' .droite').animate({height: '0%'}, 'slow');
            $('#' + x +' .droite').animate({opacity: '0'}, 'slow', function() {liste[x].style.display = 'none';});
        });
    });
}

function suivent() {
    if (i == liste.length || i > liste.length) {
        i = 0;
    }else {
        i++;
    }

    depart();

    var truc = setInterval(
        function() {
            arriver();
            clearInterval(truc);
        },2000);
}

arriver();
