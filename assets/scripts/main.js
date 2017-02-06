/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages


        $(document).ready(function(){
            $('.contact-number').css('display', 'none');//insurance button in nav display none on ready

            //AOS css animations on scroll configs
            AOS.init({
              offset: 200,
              duration: 300,
              easing: 'ease-in-sine',
            });

            $('.quotes').slick({
              dots: true,
              speed: 1000,
              autoplay: true,
              autoplaySpeed: 10000,
              arrows: false,
              infinite: true

            });            


/*function isElementVisible($elementToBeChecked)
{
    var TopView = $(window).scrollTop();
    var BotView = TopView + $(window).height();
    var TopElement = $elementToBeChecked.offset().top;
    var BotElement = TopElement + $elementToBeChecked.height();
    return ((BotElement <= BotView) && (TopElement >= TopView));
}

$(window).one('scroll', function () {
    $( ".counter" ).each(function() {
        isOnView = isElementVisible($(this));
        if(isOnView === true){
            $({countNum: $('.counter').text()}).animate({countNum: 100  }, {
                  duration: 1000,
                  easing:'linear',
                  step: function() {
                     $('.counter').text(Math.floor(this.countNum));
                  },
                  complete: function() {
                     $('.counter').text(this.countNum);

                  }
            });
        }
    });
});*/

      });


        //$(window).scroll(function(){
           // if ($(document).scrollTop() <= 200 ){
             // $('.social-icons-container').fadeIn();
              //$('.logo-heading').css('line-height', '45px');
              //$('.nts-logo').css('width', '100%');
             // $('.social-cta-section').css({'height': '160px','padding':'20px 0px'});
              //$('.contact-cta').removeClass('col-md-7').addClass('col-md-8');
             // $('.logo-container').css('border-right', '1px solid #e3e3e3');
              //$('.scroll-visible').animate({'opacity':'0','display': 'none'}, 200);
             // $('.navbar').css({'background':'transparent','box-shadow':'none'});
              //if ($(window).width() > 768){
               // $('.nav-top-section').slideDown();
              //}  
             // $('.contact-number').css('display','none');

              //$('li.menu-item-has-children a').css({'color':'white','font-weight':'300'});         
           // }
           // else{
              //$('.social-icons-container').fadeOut();
              //$('.logo-heading').css('line-height', '35px');
              //$('.nts-logo').css('width', '75%');
              //$('.social-cta-section').css({'height': '100px', 'padding': '0px'});
              //$('.contact-cta').addClass('col-md-7').removeClass('col-md-8');
             // $('.logo-container').css('border-right', 'none');
              //$('.scroll-visible').css('display','block');  
              //$('.scroll-visible').fadeIn();
              //$('.scroll-visible').animate({'opacity':'1','display':'block'}, 200);
              //$('.navbar').css({'background':'RGBA(0,32,66,.95)','box-shadow': '1px 1px 1px #000'}); 
              //if ($(window).width() > 768){
                //$('.nav-top-section').slideUp();
              //} 
              //$('.contact-number').css('display','block');
              //$('li.menu-item-has-children a').css({'color':'#000', 'font-weight':'300'});
        
            //}
       // });
        $(document).ready(function(){
             $('.btn.contact-form').on('click',function(){
                $('section.request').css('display','block');
                $('.request-button').css('display','none');
             });
        });
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
       /* $(document).ready(function(){
          $( '#my-slider' ).sliderPro({
              width: 720,
              height: 100,
              arrows: false,
              buttons: true,
              fade: false,
              autoplay: true,
              fadeArrows: false,
              captionFadeDuration: 500,
              touchSwipe: true,
              loop: true,
              slideAnimationDuration: 300
          });
        });  */

      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
