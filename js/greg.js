var $caroussel = $('#caroussel');
var $suiv = $('.next');
var $prec = $('.prev');
var faces = $caroussel.find('figure');
var panelSize = faces.outerWidth(true);
var numberOfPanels = faces.length;
var ty = 360 / numberOfPanels;
var rad = Math.round( ( panelSize / 2) / Math.tan( Math.PI / numberOfPanels ) );
var y = 0;

faces.each(function(i,e){
  $(e).css({'transform' : 'rotateY('+(i*ty)+'deg) translateZ('+rad+'px)'});
});

$caroussel.click(function(){
	y += ty*-1;
	$caroussel.css({
		'transform': 'translateZ(-'+rad+'px) rotateY(' + y + 'deg)'
	})
});
$suiv.click(function(){
	y += ty*-1;
	$caroussel.css({
		'transform': 'translateZ(-'+rad+'px) rotateY(' + y + 'deg)'
	})
});
$prec.click(function(){
	y += ty*+1;
	$caroussel.css({
		'transform': 'translateZ(-'+rad+'px) rotateY(' + y + 'deg)'
	})
});

$caroussel.css({
		'transform': 'translateZ(-'+panelSize+'px)'
	})
