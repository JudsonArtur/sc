$(document).ready(function() {
    var menu = 0;
    $('body').on('click', function() {
        if (menu != 0) {
            $('.profile_submenu').removeClass('active');
            $('.side_menu').removeClass('active');
            $('.close_menu').removeClass('active');
            $('.dash_menu').removeClass('active');
        }
    });

    $('.menu_hamburguer').on('click', function(e) {
        e.stopPropagation();
        menu = 2;
        $('.side_menu').addClass('active');
        $('.close_menu').addClass('active');
    });
    $('.close_menu').on('click', function() {
        $('.side_menu').removeClass('active');
    });


    $('.send_email').on('click', function(e) {
        e.preventDefault();
        let name = $('input[type=text]').val().trim();
        let email = $('input[type=email]').val().trim();
        let number = $('input[type=tel]').val().trim();
        let message = $('.texto').val();

        if (name !== "" && email !== "" && number !== "" && message !== "") {
            $.post('email.php', {
                nome: name,
                email: email,
                telefone: number,
                mensagem: message
            }, function(dados) {

                if (dados.Certo) {
                    $('.rsp').addClass('certo').text(dados.Certo);
                    $('input[type=text]').val('');
                    $('input[type=email]').val('');
                    $('input[type=tel]').val('');
                    $('.texto').val('');
                }
                if (dados.Error) {
                    $('.rsp').addClass('error').text(dados.Error);
                }
            }, 'json');
        } else {
            alert('Preencher todos os Dados');
        }


    });



    /*  $(window).scroll(function() {
          if ($(document).scrollTop() >= 82) {
              $('.main_menu').css({ background: '#fff', 'box-shadow': '0 2px 4px 0 rgba(0,0,0,0.25)' });
              let url = window.location.toString().split('/');

              $('.logo_1').attr('src', 'img/logo_test_2.png');

          } else {
              $('.main_menu').css({ 'background': 'transparent', 'box-shadow': '0 0 0 0 transparent' });
              let url = window.location.toString().split('/');
              if (url[url.length - 1] != '') {
                  $('.logo_1').attr('src', 'img/logo_test.png');
              }

          }

      });
      */
    let url2 = $("link[rel='base']").attr('href');
    let url = window.location.toString().split('/');
    $(window).scroll(function() {

        if ($(document).scrollTop() >= 12) {
            $('.main_menu').css({ background: '#fff', 'box-shadow': '0 2px 4px 0 rgba(0,0,0,0.25)' });


            if (url[url.length - 1] != '') {
                $('.logo_1').attr('src', url2 + '/img/logo_test_2.png');
            } else {
                $('.logo_1').attr('src', url2 + '/img/logo_test_2.png');
            }
        } else {
            $('.main_menu').css({ 'background': 'transparent', 'box-shadow': '0 0 0 0 transparent' });
            if (url[url.length - 1] != '') {
                $('.logo_1').attr('src', url2 + '/img/logo_test_2.png');
            } else {
                $('.logo_1').attr('src', url2 + '/img/logo_test.png');
            }

        }

    });
    if (url[url.length - 1] != '') {
        $('.logo_1').attr('src', url2 + '/img/logo_test_2.png');
    }
    $('.win a').on('click', function() {
        $(this).parent().siblings('.modal').addClass('active');
    })
    $('.iconclose').on('click', function() {
        $('.modal').removeClass('active');
    })

    $('.tab_li li').on('click', function() {
        $('.tab_li li').removeClass('active');
        $(this).addClass('active');
        let y = $(this).data('target');
        $('.art').css('display', 'none');
        $('.' + y).css('display', 'flex');
    });

    $('.home-slider').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 20,
        autoplayHoverPause: false,
        items: 1,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
});