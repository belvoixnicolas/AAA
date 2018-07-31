var i = 0;
var liste = $('li');

function arriver(increment) {
    if (increment == 1) {
        if (i < 0) {
            i = liste.length;
        }else {
            i = i - 2;
        }
    }


    liste[i].style.display = 'grid';
    $('li img')[i].style.marginLeft = '0';
    $('li img')[i].style.marginRight = '0';
    $('li img')[i].style.display = 'none';
    $('li img')[i].style.left = '0';
    $('li img')[i].style.right = '0';

    $('#' + i +' .gauche').delay('2000').animate({opacity: '1', width: '1px'}, 'slow', function() {
        $('#' + i +' img').animate({width: 'toggle'}, {queue: false, duration: 1000})
        .delay('710').animate({left: $('#' + i).width() /2 - $('#' + i +' img').width() /2 - 20}, 1000, function() {
            $('#' + i +' .gauche').animate({opacity: '0'}, 'slow', function() {
                i++;
            });
        });
    });
}

function depart() {
    var x = i - 1;
    
    $('#' + x +' .droite').animate({width: '1', opacity: '1'}, 'slow', function() {
        $('#' + x +' img').animate({left: $('#' + x +' img').parent().width() - $('#' + x +' img').width() - 20}, {queue: false, duration: 'slow'})
        .delay('490').animate({left: $('#' + x +' img').parent().width() - 40, width: 'toggle'}, 'slow', function() {
            $('#' + x +' .droite').animate({opacity: '0'}, 'slow', function() {liste[x].style.display = 'none';});
        });
    });

    if (i == liste.length || i > liste.length) {
        i = 0;
    }else if (i < 0) {
        i = liste.length;
    }
}

function suivent() {


    depart();

    var truc = setInterval(
        function() {
            arriver(0);
            clearInterval(truc);
        },400);
}

function présédent() {


    depart();

    var truc = setInterval(
        function() {
            arriver(1);
            clearInterval(truc);
        },3000);
}

arriver(0);
