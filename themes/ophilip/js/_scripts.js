jQuery(document).ready(function () {
    jQuery(document).ready(function () {

        jQuery("#memb-process").focusin(function () {
            jQuery(".message")
                .text("")
                .removeClass("success")
                .removeClass("fail");
        });




        // jQuery('.home-page-sliders').slick();

        // jQuery('.home-page-slider').slick({
        //     autoplay: true,
        //     speed: 800,
        //     lazyLoad: 'progressive',
        //     arrows: true,
        //     dots: false,
        //     prevArrow: '<div class="slick-nav prev-arrow"><i></i><svg><use xlink:href="#circle"></svg></div>',
        //     nextArrow: '<div class="slick-nav next-arrow"><i></i><svg><use xlink:href="#circle"></svg></div>',
        // }).slickAnimation();


        jQuery('.slider').slick({
            // autoplay: true,
            speed: 800,
            lazyLoad: 'progressive',
            arrows: true,
            // variableWidth: true,
            // variableHeight: true,
            dots: false,
              prevArrow: '<div class="slick-nav prev-arrow"><i></i><svg><use xlink:href="#circle"></svg></div>',
              nextArrow: '<div class="slick-nav next-arrow"><i></i><svg><use xlink:href="#circle"></svg></div>',
          }).slickAnimation();
          



        //   jQuery('.slick-active:nth-child(1)').removeClass('first-slide');
        //   jQuery('.slick-active:nth-child(1)').addClass('.slide__content__right');





        jQuery('.slick-nav').on('click touch', function (e) {

            e.preventDefault();

            let arrow = jQuery(this);

            if (!arrow.hasClass('animate')) {
                arrow.addClass('animate');
                setTimeout(() => {
                    arrow.removeClass('animate');
                }, 1600);
            }

        });





        jQuery('.logo-slider').slick({
           
            infinite: false,
            arrows: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
                  infinite: true,
                  dots: true
                }
              },
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2
                }
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
              // You can unslick at a given breakpoint now by adding:
              // settings: "unslick"
              // instead of a settings object
            ]
          });










          jQuery('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows: false,      
            fade: true,
            asNavFor: '.slider-nav'
          });
          jQuery('.slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            arrows: false,
         
            focusOnSelect: true,



            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            }, {
                breakpoint: 640,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
               }
            }, {
                breakpoint: 420,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
           }
            }]
          });
                      






















    });

 
    if (jQuery("#back-to-top").length) {
        var scrollTrigger = 100, // px
            backToTop = function () {
                var scrollTop = jQuery(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    jQuery("#back-to-top").addClass("show");
                } else {
                    jQuery("#back-to-top").removeClass("show");
                }
            };
        backToTop();
        jQuery(window).on("scroll", function () {
            backToTop();
        });
        jQuery("#back-to-top").on("click", function (e) {
            e.preventDefault();
            jQuery("html,body").animate({
                scrollTop: 0,
            },
                700
            );
        });
    }

    if (jQuery("header").length) {
        var scrollTrigger = 100, // px
            activeTop = function () {
                var scrollTop = jQuery(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    jQuery("header").addClass("active");
                } else {
                    jQuery("header").removeClass("active");
                }
            };
        activeTop();
        jQuery(window).on("scroll", function () {
            activeTop();
        });
    }

  
    jQuery('.home-page-slider').slick();


  
});