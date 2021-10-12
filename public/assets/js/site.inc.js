// JavaScript Document

$(document).ready(function(){

  //AMIT JS STARTS
    $('.ap-close-add').on('click', function(){

      $('.ap-add-banner').hide();

    });

    if($('.ap-slider-video').length > 0){
      $('.ap-slider-video').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        // fade: true,
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 1500,

      });
    }
    if($('.ap-common-slider-wrap').length > 0){
      $('.ap-common-slider-wrap').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        // fade: true,
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 1500,

        responsive: [

         {
            breakpoint: 950,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,

            }
          },
          {
            breakpoint: 700,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,

            }
          },

          ]

      });
    }

    if($('.ap-winner-slider').length > 0){
      $('.ap-winner-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        // fade: true,
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 1500,

      });
    }

    $('.ap-mobile-menu-toggle').on('click', function(){

      $('.ap-navigation').toggleClass('nav-open');
      $('.ap-mobile-menu-toggle').toggleClass('active');
      $('body').toggleClass('overHidden');

    });

    if($('.vn-video-inner').length > 0){
      $('.vn-video-inner').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        mobileFirst: true,
        dots: false,
        // fade: true,
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 1500,
        responsive: [
          {
              breakpoint: 700,
              settings: 'unslick'
          }
      ]

      });
    }

    if($('.ap-common-news-wrap').length > 0){
      $('.ap-common-news-wrap').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        mobileFirst: true,
        dots: false,
        // fade: true,
        speed: 1000,
        // autoplay: true,
        // autoplaySpeed: 1500,
        responsive: [
          {
              breakpoint: 800,
              settings: 'unslick'
          },
          {
            breakpoint: 750,
            settings:
            {
              slidesToShow: 2,
            }
          },
          {
            breakpoint: 700,
            settings:
            {
              slidesToShow: 1,
            }
          },

          {
            breakpoint: 400,
            settings:
            {
              slidesToShow: 1,
            }
          },
          {
            breakpoint: 350,
            settings:
            {
              slidesToShow: 1,
            }
          },
          {
            breakpoint: 300,
            settings:
            {
              slidesToShow: 1,
            }
          },

      ]

      });
    }


    if($('.vn-video-inner').length > 0){
      $('.vn-video-inner').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        mobileFirst: true,
        dots: false,
        // fade: true,
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 1500,
        responsive: [
          {
              breakpoint: 800,
              settings: 'unslick'
          },
          {
            breakpoint: 700,
            settings:{
              slidesToShow:1
            }

          },

      ]

      });
    }

    if($(window).width() < 700){
      $(".vn-tabbing").mCustomScrollbar({
        axis:"x" ,// horizontal scrollbar
        theme:"dark"
      });
    }

    if($(window).width() < 700){
      $(".vn-teamOverviewWrap .vn-teamNav ul").mCustomScrollbar({
        axis:"x" ,// horizontal scrollbar
        theme:"dark"
      });
    }

    // 25-09-2021

    if($('.ap-overs-slider').length > 0){
      $('.ap-overs-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        // fade: true,
        speed: 1000,
        // autoplay: true,
        // autoplaySpeed: 1500,

        responsive: [

         {
            breakpoint: 950,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,

            }
          },
          {
            breakpoint: 700,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,

            }
          },

          ]

      });
    }

    if($('.ap-photo-slider').length > 0){
      $('.ap-photo-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        speed: 1000,
        asNavFor: '.ap-photo-cnt-slider',


      });
    }

    if($('.ap-photo-cnt-slider').length > 0){
      $('.ap-photo-cnt-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        speed: 1000,
        asNavFor: '.ap-photo-slider',


      });
    }
    if($('.ap-phto-click').length > 0){
      $('.ap-phto-click').magnificPopup({
      type: 'inline',
      preloader: false,
      focus: '#name',
      closeOnBgClick: false,
      callbacks: {
        beforeOpen: function() {
          $('.ap-photo-slider').slick('unslick');
          $('.ap-photo-cnt-slider').slick('unslick');
          setTimeout(function(){$('.ap-photo-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            speed: 1000,

            asNavFor: '.ap-photo-cnt-slider',

          });}, 100);
          setTimeout(function(){$('.ap-photo-cnt-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            speed: 1000,
            asNavFor: '.ap-photo-slider',
          });}, 50);
        }
      }
      });
    }
    /* 28-09-2021 */
    if($('.ap-wickt-slider').length > 0){
      $('.ap-wickt-slider').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        speed: 1000,
        responsive: [

          {
            breakpoint: 1100,
            settings: {
              arrows: false,

            }
          },
          {
            breakpoint: 700,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false,
            }
          },

          ]

      });
    }

    if($(".ap-common-sroll").length > 0){
      if($(window).width() > 950){$(".ap-common-sroll").mCustomScrollbar();}
    }

    if($('.ap-fixed-match-slider').length > 0){
      $('.ap-fixed-match-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 1500,
        responsive: [

          {
            breakpoint: 1250,
            settings: {
              slidesToShow: 2,

            }
          },
          {
            breakpoint: 800,
            settings: {
              slidesToShow: 1,

            }
          },
        ]

      });
    }

  //AMIT JS ENDS

    // NIKHIL JS STARTS
    if ($('.np-card__list.np-card__leaderbordinnerList' ).length > 0) {
      $('.np-card__list.np-card__leaderbordinnerList' ).slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        mobileFirst:true,
        arrows: false,
         dots: false,
        speed: 500,
        responsive: [

          {
            breakpoint: 1024,
            settings:
              "unslick"

          },
          {
            breakpoint: 950,
            settings: {
              slidesToShow: 2,
            },
          },

          {
            breakpoint: 900,
            settings: {
              slidesToShow: 2,
            },
          },

          {
            breakpoint: 850,
            settings: {
              slidesToShow: 2,
            },
          },
          {
            breakpoint: 820,
            settings: {
              slidesToShow: 2,
            },
          },
          {
            breakpoint: 800,
            settings: {
              slidesToShow: 2,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
            },
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
            },
          },
          {
            breakpoint: 550,
            settings: {
                   slidesToShow: 1,
                 },
          },

          {
            breakpoint: 320,
            settings: {
                   slidesToShow: 1,
                 },
          },
          {
            breakpoint: 300,
            settings: {
                   slidesToShow: 1,
                 },
          },
        ],
      });
    }

    if ($('.np-card__list' ).length > 0) {
      $('.np-card__list' ).slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        mobileFirst:true,
        arrows: false,
         dots: false,
        speed: 500,
        responsive: [

          {
            breakpoint: 1024,
            settings:
              "unslick"

          },

          {
            breakpoint: 950,
            settings: {
              slidesToShow: 3,
            },
          },
          {
            breakpoint: 900,
            settings: {
              slidesToShow: 4,
            },
          },


          {
            breakpoint: 850,
            settings: {
              slidesToShow: 3,
            },
          },
          {
            breakpoint: 820,
            settings: {
              slidesToShow: 3,
            },
          },
          {
            breakpoint: 800,
            settings: {
              slidesToShow: 3,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 3,
            },
          },

          {
            breakpoint: 700,
            settings: {
              slidesToShow: 2,
            },
          },

          {
            breakpoint: 550,
            settings: {
                   slidesToShow: 1,
                 },
          },

          {
            breakpoint: 320,
            settings: {
                   slidesToShow: 1,
                 },
          },
          {
            breakpoint: 300,
            settings: {
                   slidesToShow: 1,
                 },
          },
        ],
      });
    };

    $(".np-auction__LatestVid").mCustomScrollbar({});

    // 29-09-2021
    // tab code

    $('.np-tabmenu-content li a').on('click',function(){
      var relTab = $(this).attr('rel');
      $('.np-tabmenu-content li').removeClass('current');
      $('.np-tabmenu__cnt').removeClass('current');
      $(this).parent().addClass('current');
      $(this).parent().parent().parent().find("#"+relTab).addClass('current');
    });

    $('.np-filt').on('click', function(){

      $('body').addClass('blueOverlay');
      $('.Filter_popup').slideDown('slow');

    });

    $('.closePop').on('click', function(){

      $('.Filter_popup').slideUp();
      $('body').removeClass('blueOverlay');
      

    });

    // NIKHIL JS ENDS

    $('#tabs a.ap-common-tab').click(function(){
      var t = $(this).attr('id');

      if($(this).hasClass('inactive')){  
        $('#tabs a.ap-common-tab').addClass('inactive');  
        $('#tabs a.ap-common-tab').removeClass('active');          
        $(this).removeClass('inactive');
        $(this).addClass('active');
        $('.ap-tab-content').hide();
        $('#'+ t + 'T').fadeIn('slow');
     }
    });
    if ($("section.ap-fixed-match-brief")[0]){ $('body').addClass('home'); }else{ $('body').addClass('not-home'); }
    $( ".vn-sheduleFilter" ).click(function() {
      $('.filter').show();
      $('body').addClass('fixed');
    });
    $( ".close" ).click(function() {
      $('.filter').hide();
      $('body').removeClass('fixed');
    });      

});


