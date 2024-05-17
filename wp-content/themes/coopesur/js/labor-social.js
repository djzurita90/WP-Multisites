(function ($) {

  $(function () {

    'use strict';

    /*------------------------------------*\
    => CARGAR MÁS POSTS - LABOR SOCIAL ::
    \*------------------------------------*/

    var pagina = 1;

    function load_posts(){
      pagina++;
      $.ajax({
        type: "POST",
        dataType: "html",
        url: 'http://cooperativacoopesur.com/wp-admin/admin-ajax.php',
        data: {
          action: 'more_laborSocial',
          page: pagina,
        },
	      success: function(data){
          //console.log(data);
          if (data == 'false'){
            $(".load-more").attr("disabled", true);
            $(".load-more").remove();
            $(".bnt-and-notifications").append('<h2 class="color-dark montserrat regular">Ya no hay más labores sociales por cononocer</h2>');
          }else{
            $(".custom-posts-laborSocial").append(data);
            $(".load-more").attr("disabled", false);
          }
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        }
      });
      return false;
    }
    
    $(".load-more").on("click",function(){
      $(".load-more").attr("disabled", true);
      load_posts();
    });


    /*------------------------------------*\
    => CAROUSEL GALERÍA - LABOR SOCIAL ::
    \*------------------------------------*/

    $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      // arrows: false,
      // fade: true,
      asNavFor: '.slider-nav',
      infinite: false,
      // dots: true,
    });
    $('.slider-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 3,
      asNavFor: '.slider-for',
      // dots: true,
      // centerMode: true,
      focusOnSelect: true,
      infinite: false,
      prevArrow: $('.prev'),
      nextArrow: $('.next'),
      responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
          }
        }
      ]
    });
    

    /*------------------------------------*\
    => CAROUSEL GALERÍA - LABOR SOCIAL ::
    \*------------------------------------*/

    $('.carousel-post-laborSocial').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3,
      responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            arrows: true
          }
        }
      ]
    });


    /*------------------------------------*\
    => ACTIVAR LIGHTBOX GALERIA ::
    \*------------------------------------*/

    // $('.slick-slide').on('click', function(){
    //   $('.test').css('display', 'block');
    // });


    /*------------------------------------*\
    => TEXTOS RESPONSIVE ::
    \*------------------------------------*/

    // $('.labor__social').flowtype({
    //   minimum: 300,
    //   maximum: 1920,
    //   minFont: 12,
    //   maxFont: 40,
    //   fontRatio: 30
    // }),
    // $('.card-text').flowtype({
    //   minFont: 16,
    //   maxFont: 24,
    //   fontRatio: 36
    // });
    // $('.featured-article').flowtype({
    //   minFont: 12,
    //   fontRatio: 20
    // }),
    // $('.side-stories').flowtype({
    //   minFont: 16,
    //   fontRatio: 30
    // });

    // $('.labor__social').flowtype({
    //   minimum: 300,
    //   maximum: 1920,
    //   minFont: 12,
    //   maxFont: 40
    // });
    
    

  });


})(jQuery);