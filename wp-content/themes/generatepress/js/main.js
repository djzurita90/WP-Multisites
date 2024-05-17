

jQuery(document).ready(function ($) {

  $('.slick-products').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 2
  });
  
  setTimeout(function () {
    jQuery('.notification').addClass('active');
  }, 5000);

  jQuery('.notification').on('click', '.closeNotification', function (e) {
    e.preventDefault();
    jQuery('.notification').removeClass('active');
  });

  jQuery('.eh_crm_support_main').on('click', '#support-table tr', function (e) {
      jQuery('.contador').remove();
      var ticket_id = $(this).attr('id');
      jQuery.ajax({
        type: 'post',
        url: support_object.ajax_url,
        data: {
          action: 'tickets_cuentatras',
          ticket_id: ticket_id
        },
        success: function (data) {
          if (data == '0'){ 
            jQuery("<article>", {
              'class': 'contador'
            }).hide().appendTo('body').fadeIn('fast');
            jQuery('.contador').html('<h2>No Disponible</h2>');
            jQuery('.contador').addClass('active');
          }else{
            const second = 1000,
              minute = second * 60,
              hour = minute * 60,
              day = hour * 24;
            jQuery("<article>", {
              'class': 'contador'
            }).append(
              $('<ul>', {
              }).append(
                $('<li>', {
                }).append(
                  $('<span>', {
                    'text': 'Horas'
                  }),
                  $('<span>', {
                    'class': 'horas'
                  })
                ),
                $('<li>', {
                }).append(
                  $('<span>', {
                    'text': 'Minutos'
                  }),
                  $('<span>', {
                    'class': 'minutos'
                  })
                ),
                $('<li>', {
                }).append(
                  $('<span>', {
                    'text': 'Segundos'
                  }),
                  $('<span>', {
                    'class': 'segundos'
                  })
                ),
              )
            ).hide().appendTo('body').fadeIn('fast');

            let countDown = new Date(data).getTime(),
              x = setInterval(function () {
                let now = new Date().getTime(),
                  distance = countDown - now;
                  jQuery('.horas').html(Math.floor((distance % (day)) / (hour)));
                  jQuery('.minutos').html(Math.floor((distance % (hour)) / (minute)));
                  jQuery('.segundos').html(Math.floor((distance % (minute)) / second));
              }, second)
            jQuery('.contador').addClass('active');
          }
          
          //console.log(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        }
      });
    // }
  });
});
