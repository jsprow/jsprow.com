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
      <h1>welcome to...</h1>
      <a href="flexbox/flex.html">...flexbox</a>
      <a href="ajax/index.php">...ajax</a>
      <a href="emailform/emailform.php">...forms that email</a>
      <a href="wikipedia/index.php">...flashcards scraped from wikipedia</a>
      <div class="space-invader-box">
        <div class="space-invader"></div>
      </div>
    </main>

  <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="youtubebg.js"></script>
  <script>
    $(function() {
      $('#video').YTPlayer({
        fitToBackground: true,
        videoId: 'eORnMWDI_F0',
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
        $('#video').fadeToggle();
        var player = $('#video').data('ytPlayer').player;
        player.playVideo();
      });
    });
  </script>
</body>
</html>
