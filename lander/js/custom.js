
//Document ready function scripts 
jQuery(function($) {


          /* modal video */
          var modal = $('.modal');

          $('.modal-toggle').each(function(){

            $(this).click(function(e) {

              e.preventDefault();

              

              $('body, .modal').toggleClass('is-visible');

              modal.find('iframe').attr('src', $('iframe').attr('src'));

              var vid_id = $(this).data('video-id');
              var vid_type = $(this).data('video-type');

              var yt_url = 'https://www.youtube.com/embed/';
              var vim_url = 'https://player.vimeo.com/video/';

              if( vid_type == 'youtube' ) {
                modal.find('iframe').attr('src', yt_url + vid_id + '/?autoplay=1&loop=1&rel=0&loop=1');
              }
              else {
                modal.find('iframe').attr('src', vim_url + vid_id +'/?autoplay=1&loop=1&rel=0&loop=1');
              }
            });
          });

          
            
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

        $('.trailer-group .trailer-item').each( function(){
            $(this).click(function(){

                var vid = $(this).attr('data-video');  
                var yt_url = 'https://www.youtube.com/embed/';  
                
                $("iframe#ytplayer").attr('src', yt_url + vid + '?&autoplay=1');
                $('#popup-video').foundation('open');        
            });
        });

        $(".play-btn").on("click", function(){

            $video_type = videoType($url);
        
            if( $video_type == 'youtube'){
        
                preg_match('#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#', $url, $match);
                $video_id = $match[0];        
                
            }
                $("iframe#ytplayer").attr('src', yt_url + vid_id + '/?rel=0&amp;autoplay=1');
                $('#popup-video').foundation('open');                
        });
});

    


