$(document).ready(function(){
	AOS.init();
    
    /*Funcionalidad de portada para las internas que son distintas al home*/
    $(document).on("scroll", function(){
    	var desplazamientoActual = $(document).scrollTop();
    	var portadaTitulo = $(".portada-titulo");
    	if(desplazamientoActual > 50){
    		portadaTitulo.fadeOut(100);
    	}else{
    		portadaTitulo.fadeIn(500);
    	}
    	if(desplazamientoActual > 400){
    		$('.portada-container').addClass('d-none');
    	}else{
    		$('.portada-container').removeClass('d-none');
    	}
    });

});
/*Function movimiento portada slyder*/
function doalert(obj) {
	var coordenadas = $(obj).position();
	var coordY = coordenadas.top;
    $('html, body').animate({
		    scrollTop: coordY
		}, 2000);
};
function hiddenMenu(){
    $('#burguer').toggleClass('d-none');
};

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
		$("#burguer").css("top", "88px");
		$("#burguer").css("right", "9%");	
	}
});