<!DOCTYPE html>
<html>
<head>
	<title>FB TEST</title>
</head>
<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1803330163281004',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
  function myFacebookLogin() {
  	FB.login(function(){
  		  FB.api('/me/feed', 'post', {message: 'Hello, world!'});
	}, {scope: 'publish_actions'});
	};
</script>
<h1>hello</h1>

<!-- Facebook Like Button -->
<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>

<button onclick="myFacebookLogin()">Login with Facebook</button>

</body>
</html>