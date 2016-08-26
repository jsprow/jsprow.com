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

	$fb = new Facebook\Facebook([/* . . . */]);

	// Sets the default fallback access token so we don't have to pass it to each request
	$fb->setDefaultAccessToken('{access-token}');

	try {
	  $response = $fb->get('/me');
	  $userNode = $response->getGraphUser();
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
	  // When Graph returns an error
	  echo 'Graph returned an error: ' . $e->getMessage();
	  exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
	  // When validation fails or other local issues
	  echo 'Facebook SDK returned an error: ' . $e->getMessage();
	  exit;
}

echo 'Logged in as ' . $userNode->getName();
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

<?php 
$request = new FacebookRequest(
  $session,
  'GET',
  '/me',
  array(
    'fields' => 'id,name'
  )
);

$response = $request->execute();
$graphObject = $response->getGraphObject();
/* handle the result */
?>
</body>
</html>