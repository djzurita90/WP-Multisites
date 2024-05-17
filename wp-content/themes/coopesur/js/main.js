var $elem = $('.carousel-item img'); // element to be moved
var $pos = -50;
var $setT;
$(document).ready(function (){
	loopPortada();	
	AOS.init();
});
/*Function movimiento portada slyder*/
function loopPortada(){	
	$('.carousel-item img').animate({
	  transform: 'translate(0px, '+($pos+50)+'px)',		
	},8000);
	$('.carousel-item img').animate({
	  transform: 'translate(0px, '+($pos-50)+'px)',		
	},8000,loopPortada);		
}
function doalert(obj) {
	var coordenadas = $(obj).position();
	var coordY = coordenadas.top-30;
    $('html, body').animate({
		    scrollTop: coordY
		}, 2000);
}
function hiddenMenu(){
    $('#burguer').toggleClass('d-none');
}

$(document).on("scroll", function(){
	var coordY = 450;
	if($(window).scrollTop()>coordY){
		$('.nav-menu').removeClass('hidden');
		$("#burguer").css("top", $(window).scrollTop()+(65)+"px");
		$("#burguer").css("right", "9%");
		$( ".nav-menu" ).fadeTo( "slow" , 1, function() {
			$('.nav-menu').css('opacity', "1");	
		 });
	}
	else {	
		$('.nav-menu').addClass('hidden');
		$('.nav-menu').css('opacity', "0");			
		$("#burguer").css("top", "185px");
		$("#burguer").css("right", "9%");	
	}

	var coordenadas = $("#seccionCont").position();
	var coordYCount = coordenadas.top;
    if($(window).scrollTop()>coordYCount-680){
    	$('.counter').each(function() {
		  var $this = $(this),
		      countTo = $this.attr('data-count');
		  
		  $({ countNum: $this.text()}).animate({
		    countNum: countTo
		  },
		  {
		    duration: 1000,
		    easing:'linear',
		    step: function() {
		      $this.text(Math.floor(this.countNum));
		    },
		    complete: function() {
		      $this.text(this.countNum);
		    }
		  });  
		});
    };
});