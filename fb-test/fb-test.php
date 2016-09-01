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
      "/1829286997357726/ratings",
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

</body>
</html>