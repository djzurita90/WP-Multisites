

jQuery(document).ready(function ($) {
  
  setTimeout(function () {
    jQuery('.notification').addClass('active');
  }, 5000);

  jQuery('.notification').on('click', '.closeNotification', function (e) {
    e.preventDefault();
    jQuery('.notification').removeClass('active');
  });

  jQuery('.eh_crm_support_main').on('click', '#support-table tr', function (e) {
      var ticket_id = $(this).attr('id');
      jQuery.ajax({
        type: 'post',
        url: support_object.ajax_url,
        data: {
          action: 'tickets_cuentatras',
          ticket_id: ticket_id
        },
        success: function (data) {
          const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;
          jQuery('.contador').remove();
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
                  'id': 'horas'
                })
              ),
              $('<li>', {
              }).append(
                $('<span>', {
                  'text': 'Minutos'
                }),
                $('<span>', {
                  'id': 'minutos'
                })
              ),
              $('<li>', {
              }).append(
                $('<span>', {
                  'text': 'Segundos'
                }),
                $('<span>', {
                  'id': 'segundos'
                })
              ),
            )
          ).hide().appendTo('body').fadeIn('fast');

          let countDown = new Date(data).getTime(),
              x = setInterval(function () {
          let now = new Date().getTime(),
              distance = countDown - now;
              document.getElementById('horas').innerHTML = Math.floor((distance % (day)) / (hour)),
              document.getElementById('minutos').innerHTML = Math.floor((distance % (hour)) / (minute)),
              document.getElementById('segundos').innerHTML = Math.floor((distance % (minute)) / second);
            }, second)
          jQuery('.contador').addClass('active');
          console.log('hola'+data);
          // jQuery(".table_loader").css("display", "none");
          // jQuery('.ticket_load_content').html(data);
          // jQuery('.reply_textarea').each(function () {
          //   this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
          // }).on('input', function () {
          //   this.style.height = 'auto';
          //   this.style.height = (this.scrollHeight) + 'px';
          // });
          // jQuery('html, body').animate({
          //   scrollTop: jQuery("hr").offset().top
          // }, 1000);
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        }
      });
    // }
  });
});
