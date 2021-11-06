
set_background = function () {
  if (jQuery('[data-bg]').length > 0) {
      return jQuery('[data-bg]').each(function () {
          var background, backgroundmobile, that;
          that = jQuery(this);
          background = jQuery(this).attr('data-bg');
          backgroundmobile = jQuery(this).attr('data-bg-mobile');

          if (that.attr('data-bg').substr(0, 1) === '#') {
              that.css('background-color', background);
          } else if (that.attr('data-bg-mobile') && device.mobile()) {
              if (device_width <= 992){

                  that.css('background-image', 'url(' + backgroundmobile + ')');
              }
              else if (device_width >= 1200){
                  that.css('background-image', 'url(' + background + ')');
              }


          } else {
              that.css('background-image', 'url(' + background + ')');
          }

      });
  }
};


//Document ready function scripts 
jQuery(function($) {
      
  set_background();

      /* modal video */
      var modal = $('.modal');

    
    //play button
        
      $(document).on('keyup',function(evt){
        if (evt.keyCode == 27) {
            $("iframe#ytplayer").attr("src", "");
        }
    });
    $('.reveal-overlay').on('click',function(){
        var hiddenStatus = $('#popup-video').attr('aria-hidden');
        if (hiddenStatus == 'true'){
            $("iframe#ytplayer").attr("src", "");
        }
    });
    $('.close-button').on('click', function(){
        $("iframe#ytplayer").attr("src", "");
    });

    $('.btn-play').each( function(){
        $(this).click(function(e){

            var vid = $(this).data('video'); 
            var yt_url = 'https://www.youtube.com/embed/';  
            
            $("iframe#ytplayer").attr('src', yt_url + vid + '?autoplay=1&loop=1&modestbranding=1&rel=0' );
            $('#popup-video').foundation('open');     
            $('html, body').animate({
              scrollTop: $("body").offset().top}, 500);
        }).click(function (e) { e.preventDefault();});
    });


    //slick 

    function setBoundries(slick, state) {
      if (state === 'default') {
        slick.find('ul.slick-dots li').eq(4).addClass('n-small-1');
      }
    }
  
    // Slick Selector.
    var slickSlider = $('.gallery_slick');
    var maxDots = 5;
    var transformXIntervalNext = -18;
    var transformXIntervalPrev = 18;
  
    slickSlider.on('init', function (event, slick) {
      $(this).find('ul.slick-dots').wrap("<div class='slick-dots-container'></div>");
      $(this).find('ul.slick-dots li').each(function (index) {
        $(this).addClass('dot-index-' + index);
      });
      $(this).find('ul.slick-dots').css('transform', 'translateX(0)');
      setBoundries($(this),'default');
    });
  
    var transformCount = 0;
    slickSlider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
      var totalCount = $(this).find('.slick-dots li').length;
      if (totalCount > maxDots) {
        if (nextSlide > currentSlide) {
          if ($(this).find('ul.slick-dots li.dot-index-' + nextSlide).hasClass('n-small-1')) {
            if (!$(this).find('ul.slick-dots li:last-child').hasClass('n-small-1')) {
              transformCount = transformCount + transformXIntervalNext;
              $(this).find('ul.slick-dots li.dot-index-' + nextSlide).removeClass('n-small-1');
              var nextSlidePlusOne = nextSlide + 1;
              $(this).find('ul.slick-dots li.dot-index-' + nextSlidePlusOne).addClass('n-small-1');
              $(this).find('ul.slick-dots').css('transform', 'translateX(' + transformCount + 'px)');
              var pPointer = nextSlide - 3;
              var pPointerMinusOne = pPointer - 1;
              $(this).find('ul.slick-dots li').eq(pPointerMinusOne).removeClass('p-small-1');
              $(this).find('ul.slick-dots li').eq(pPointer).addClass('p-small-1');
            }
          }
        }
        else {
          if ($(this).find('ul.slick-dots li.dot-index-' + nextSlide).hasClass('p-small-1')) {
            if (!$(this).find('ul.slick-dots li:first-child').hasClass('p-small-1')) {
              transformCount = transformCount + transformXIntervalPrev;
              $(this).find('ul.slick-dots li.dot-index-' + nextSlide).removeClass('p-small-1');
              var nextSlidePlusOne = nextSlide - 1;
              $(this).find('ul.slick-dots li.dot-index-' + nextSlidePlusOne).addClass('p-small-1');
              $(this).find('ul.slick-dots').css('transform', 'translateX(' + transformCount + 'px)');
              var nPointer = currentSlide + 3;
              var nPointerMinusOne = nPointer - 1;
              $(this).find('ul.slick-dots li').eq(nPointer).removeClass('n-small-1');
              $(this).find('ul.slick-dots li').eq(nPointerMinusOne).addClass('n-small-1');
            }
          }
        }
      }
    });

    $('.gallery_slick').slick({
      adaptiveHeight: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      focusOnSelect: true,
      infinite : false,
      autoplay: true,
      autoplaySpeed: 2000,
    });
            
    // fancybox
    $().fancybox({
      selector : '.gallery_slick .slick-slide:not(.slick-cloned)',
      backFocus : false,
    });




});

    


