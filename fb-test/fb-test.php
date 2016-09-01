<!DOCTYPE html>
<html>
<head>
	<title>FB TEST</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '',
      xfbml      : true,
      version    : 'v2.7'
    });
    FB.api(
      "/{1829286997357726}/ratings",
      function (response) {
        if (response && !response.error) {
          /* handle the result */
          alert('success');
        } else {
          alert('failure');
        }
      }
    );
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<h1>hello</h1>
<?php
  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/1829286997357726/rating");
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, "access_token={EAACEdEose0cBAOnCvZC5QZAdacSEqHEgIZAYMZA9CDICxjuFDP8LVZCHZAWCPEoFHke7AJKA2ZAw0xyPUN6e7sryov8zIbTDbRFJt0s5n2oH4JLwGc2h1q6U8DLUAo2rAOMrys2uZB6jqEQEURZAeb1tK0ax2PpZAoTDZBJuLQKCAA43QZDZD}");

  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $server_output = curl_exec ($ch);

  curl_close ($ch);

  if ($server_output == "OK") { "yay" } else { "boo" };

  die();
?> 
  curl -F 'method=get'\

<script type="text/javascript">
</script>
</body>
</html>