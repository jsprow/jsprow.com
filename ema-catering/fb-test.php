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
</script>
<h1>hello</h1>

<!-- Facebook Like Button -->
<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>

<?php 
/* PHP SDK v5.0.0 */
/* make the API call */
$request = new FacebookRequest(
  $session,
  'POST',
  '/{1803330163281004}/subscriptions',
  array (
    'object' => 'page',
    'callback_url' => 'https://jsprow.com/fb-test.php',
    'fields' => 'about, picture',
    'verify_token' => 'thisisaverifystring',
  )
);

$response = $request->execute();
$graphObject = $response->getGraphObject();
/* handle the result */
?>
</body>
</html>