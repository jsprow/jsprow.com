<!DOCTYPE html>
<html>
<head>
  <title>JSprow</title>

  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="icon" type="image/png" href="favicon.ico">
</head>
<body id="body-duh">
  <div id="video"></div>
    <main>
      <h1>home of...</h1>
      <a href="flexbox/flex.html">...flexbox</a>
      <a href="ajax/index.php">...ajax</a>
      <a href="emailform/emailform.php">...forms that email</a>
      <a href="wikipedia/index.php">...flashcards scraped from wikipedia</a>
      <a href="checkin/index.php">...a check-in/out form</a>
      <div class="space-invader-box">
        <div class="space-invader"></div>
      </div>
      <div class="space-invader-box__top">
        <div class="space-invader__top"></div>
      </div>
    </main>

  <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
  <script src="youtubebg.js"></script>
  <script>
    $(function() {
      var doubleRainbow = ['OQSNhk5ICTI'];
      //var randomSassy = sassyTrump[Math.floor(Math.random() * sassyTrump.length)];
      $('#video').YTPlayer({
        fitToBackground: true,
        videoId: doubleRainbow,
        repeat: true,
        mute: false,
        events: {
          'onReady': onPlayerReady
        }
      });
      function onPlayerReady() {
        var player = $('#video').data('ytPlayer').player;
        player.pauseVideo();
      };
      $('.space-invader-box').click(function() {
        $('h1').addClass('dim');
        $('a').addClass('dim');
        $('a').addClass('right');
        $('h1').addClass('right');
        $('.space-invader-box__top').addClass('right');
        $('#video').fadeIn();
        $(this).hide();
        $('.space-invader-box__top').fadeIn();
        $('.space-invader__top').fadeIn();
        var player = $('#video').data('ytPlayer').player;
        player.playVideo();
      });
      $('.space-invader-box__top').click(function() {
        $('h1').removeClass('dim');
        $('a').removeClass('dim');
        $('a').removeClass('right');
        $('h1').removeClass('right');
        $('.space-invader-box__top').removeClass('right');
        var player = $('#video').data('ytPlayer').player;
        player.pauseVideo();
        $('#video').fadeOut();
        $(this).hide();
        $('.space-invader-box').fadeIn();
        $('.space-invader').fadeIn();
      });
    });
  </script>
</body>
</html>
