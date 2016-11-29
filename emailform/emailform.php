<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Email Contact Form</title>
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	<style>
		body {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			font-size: calc( 14px + (20 - 14) * (100vw - 320px)/(1280 - 320));
			line-height: calc( 1.3em + (1.5 - 1.3) * ( (100vw - 21em) / (35 - 21)));
			height: 100vh;
			margin: 0;
		}
		label,
		input,
		textarea,
		button {
			font-family: 'Slabo 27px', serif;
		}
		form {
			display: flex;
			flex-flow: column nowrap;
			align-items: flex-start;
			width: 20em;
			margin: auto;
		}
		label,
		p,
		input,
		textarea,
		button {
			font-size: 1em;
			border: none;
			outline: none;
			margin: 0 0 1em 0;
			padding: 0.5em;
		}
		label {
			display: flex;
			flex-flow: row wrap;
			justify-content: space-between;
			align-items: center;
			width: 20em;
		}
		input,
		textarea {
			margin-left: auto;
			border-bottom: 1px solid #ddd;
			transform: translate(0, 0);
			transition: transform 200ms, box-shadow 200ms;
		}
		input:focus:valid,
		textarea:focus:valid {
			border-bottom: 2px solid darkgreen;
		}
		button {
			cursor: pointer;
			background-color: transparent;
			border: 1px dashed #ddd;
			margin: 0 auto;
			transform: translate(0, 0);
			transition: transform 200ms, box-shadow 200ms;
		}
		input:hover,
		textarea:hover,
		button:hover {
			box-shadow: 2px 2px 6px #ddd;
			transform: translate(-2px, -2px);
			transition: transform 200ms, box-shadow 200ms;
		}
		input:focus,
		textarea:focus,
		button:active {
			box-shadow: 1px 1px 4px #ddd;
			transform: translate(-1px, -1px);
			transition: transform 50ms, box-shadow 50ms;
		}
	</style>
</head>
<body>
	<form class="email" action="mailhandler.php" method="post">
		<label for="#name">
			<p>Name</p>
			<input id="name" type="text" name="name" required="" placeholder="First Last">
		</label>
		<label for="#email">
			<p>Email</p>
			<input id="email" type="email" name="email" required="" pattern="(?!(^[.-].*|[^@]*[.-]@|.*\.{2,}.*)|^.{254}.)([a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@)(?!-.*|.*-\.)([a-zA-Z0-9-]{1,63}\.)+[a-zA-Z]{2,15}" placeholder="you@example.com">
		</label>
		<label for="#phone">
			<p>Phone Number</p>
			<input id="phone" type="phone" name="phone" required="" pattern="^\D?(\d{3})\D?\D?(\d{3})\D?(\d{4})$" placeholder="xxx-xxx-xxxx">
		</label>
		<label for="#message">
			<p>Message</p>
			<textarea id="message" type="textarea" name="message" required="" placeholder="Please let us know how we can help you."></textarea>
		</label>	
		<div class="g-recaptcha" data-sitekey="6Lf8NwkUAAAAAL10S24CNJEkfOAb-aRKfvaik2W7"></div>
		<button id="email-submit" type="submit" value="Submit"><i class="fa fa-envelope"></i><span> Submit</span></button>
	</form>
</body>
</html>
