var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '360',
          width: '640',
          videoId: 'fygyNQAzRFM',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }
      function onPlayerReady(event) {
        event.target.PlayerState();
      }
      var timer=false;
      var stepSet=270;

            function onPlayerStateChange(event) { 
        if (event.data == YT.PlayerState.PLAYING) {
          var interval=SetInterval(function() {if(player.getCurrentTime()>stepSet && !timer){timer=true;showBtn();}}, 1000);
        }
        function showBtn(){
          $('.show-btn').removeClass('d-none');
        }
      }