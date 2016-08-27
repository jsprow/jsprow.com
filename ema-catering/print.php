<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	
  	<title>EMA Catering Menu</title>

	<style>
	body {
		position: relative;
	    font-size: 16px;
		font-family: 'PT Sans Narrow', sans-serif;
	}
	header {
		text-align: center;
		width: 100%;
	}
	h1 {
		width: 100%;
	    font-size: 3.236em;
	}
	h2 {
		position: relative;
		page-break-before: always;
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
	table {

	}
	.printable {
		position:relative;
		display: flex;
		flex-flow: row wrap;
		justify-content: space-between;
		width: 100%;
		max-height: 300vh;
	}
	.item {
		display: flex;
		flex-flow: column wrap;
		flex: 1 0 40%;
		outline: 1px solid black;
		padding: 1%;
		margin: 1%;
		font-size: 80%;
	}
	.description {
		display: block;
		width: 100%;
	}
	.longlist {
		max-height: 100vh;
	}
	/*@media all and (min-width: 960px) {
	    body{
	        font-size: 18px;
    	}
	}
	 
	@media all and (max-width: 959px) and (min-width: 600px) {
	    body{
	        font-size: 16px;
	    }
	}
	 
	@media all and (max-width: 599px) and (min-width: 320px) {
	    body{
	        font-size: 12px;
	    }
	 
	}*/
	</style>
</head>
<body>
	<header>
  		<h1>EMA Catering Menu</h1>
		<h2>To Schedule</h2>
		<p>Please call us at either number below </p>
		<p><strong>269-207-9381 / 269-254-5388</strong></p>
	</header>
	<main>
		<table>
			<td>
			<?php
				include('simple_html_dom.php');
				$html = file_get_html('ema-content.html');
				foreach ($html->find('div.printable') as $div) {

					echo '<div>' . $div . '</div> </div> </td>';
				};
			?>
		</table>
	</main>
</body>
</html>
