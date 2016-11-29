<!DOCTYPE html>
<html>
<head>
	<title>Email Contact Form</title>
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	<style>
		body {
			font-size: calc( 14px + (20 - 14) * (100vw - 320px)/(1280 - 320));
  			line-height: calc( 1.3em + (1.5 - 1.3) * ( (100vw - 21em) / (35 - 21)));
		}
		body,
		label,
		input,
		textarea,
		button {
			font-family: 'Slabo 27px', serif;
		}
		form {
			display: flex;
			flex-flow: column nowrap;
			justify-content: space-between;
			align-items: flex-start;
			height: 100vh;
		}
		label,
		input,
		textarea,
		button {
			font-size: 1em;
			border: none;
			outline: none;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<form class="email" action="email.php" method="post">
		<label for="#name">Name</label>
		<input id="name" type="text" name="name" required="" placeholder="First Last">
		<label for="#email">Email</label>
		<input id="email" type="email" name="email" required="" pattern="(?!(^[.-].*|[^@]*[.-]@|.*\.{2,}.*)|^.{254}.)([a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@)(?!-.*|.*-\.)([a-zA-Z0-9-]{1,63}\.)+[a-zA-Z]{2,15}" placeholder="you@example.com">
		<label for="#phone">Phone Number</label>
		<input id="phone" type="phone" name="phone" required="" pattern="^\D?(\d{3})\D?\D?(\d{3})\D?(\d{4})$" placeholder="xxx-xxx-xxxx">
		<label for="#message">Message</label>
		<textarea id="message" type="textarea" name="message" required="" placeholder="Please let us know how we can help you."></textarea>
		<div class="g-recaptcha" data-sitekey="6Lf8NwkUAAAAAL10S24CNJEkfOAb-aRKfvaik2W7"></div>
		<button id="email-submit" type="submit" value="Submit"><i class="fa fa-envelope"></i><span> Submit</span></button>
	</form>
</body>
</html>
