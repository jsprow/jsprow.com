<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	
  	<title>EMA Catering Menu</title>

	<style>
		body {
		    font-size: 16px;
			font-family: 'PT Sans Narrow', sans-serif;
			width: 95%;
		}
		header {
			text-align: center;
			width: 100%;
		}
		h1, h2, h3, h4, p, ul, li {
			margin: 0;
		}
		h1 {
			width: 100%;
		    font-size: 3.236em;
		}
		h2 {
			width: 100%;
		}
		h3, h4 {
			max-width: 100%;
		}
		p, li {
			display: inline-block;
			font-size: 1em;
	    	line-height: 1.618em;
		}
		.printable {
			page-break-inside: avoid;
			display: -ms-flexbox;
			display: flex;
			-ms-flex-flow: row wrap;
			    flex-flow: row wrap;
			-ms-flex-pack: justify;
			    justify-content: space-between;
			width: 100%;
		}
		.item {
			display: -ms-flexbox;
			display: flex;
			-ms-flex-flow: column wrap;
			    flex-flow: column wrap;
			-ms-flex: 1 1 25%;
			    flex: 1 1 25%;
			outline: 1px solid black;
			padding: 1%;
			margin: 1%;
			font-size: 80%;
		}
		.item li, .description li {
			padding: 0 1em;
		}
		.description {
			display: block;
			width: 100%;
		}
		.longlist {
		}
	</style>
</head>
<body>
	<header>
  		<h1>EMA Catering Menu</h1>
		<h2>To Schedule</h2>
		<p>Please call us at either number below </p>
		<p><strong>269-207-9381 / 269-254-5388</strong></p>
	</header>
	<?php
		include('simple_html_dom.php');
		$html = file_get_html('ema-content.php');
		foreach ($html->find('div.printable') as $div) {
			echo $div . '</div>';
		};
	?>
</body>
</html>
