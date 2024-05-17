(function ($) {

  $(function () {

    'use strict';

    /*------------------------------------*\
    => CARGAR MÁS POSTS - POST BLOG ::
    \*------------------------------------*/

    var pagina = 1;

    function load_posts(dataSection) {
      let search = $(".load-morePost").attr('data-search');
      console.log(search);
      pagina++;
      $.ajax({
        type: "POST",
        dataType: "html",
        url: 'http://cooperativacoopesur.com/wp-admin/admin-ajax.php',
        data: {
          action: 'more_postBlog',
          page: pagina,
          dataSection: dataSection,
          dataFiltro: search
        },
        success: function (data) {
          console.log(data);
          if (data == 'false') {
            $(".load-morePost").attr("disabled", true);
            $(".load-morePost").remove();
            $(".bnt-and-notifications").append('<h2 class="color-dark montserrat regular">Ya no hay más entradas por conocer</h2>');
          } else {
            $(".wrapp-post").append(data);
            $(".load-morePost").attr("disabled", false);
          }
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        }
      });
      return false;
    }

    $(".load-morePost").on("click", function () {
      let section = $(".load-morePost").attr('data-section');
      $(".load-morePost").attr("disabled", true);
      load_posts(section);
    });


  });


})(jQuery);