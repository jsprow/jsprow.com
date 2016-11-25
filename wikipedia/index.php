<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Wikipedia API Practice</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="cards">
	<script id="hr-template" type="text/x-handlebars-template">
		<div class="stage">
			<div class="flashcard">
				<div class="front">
					<p>{{cellsArray.[0]}}</p>
				</div>
				<div class="back">
					<p>{{cellsArray.[1]}}</p>
					<br>
					<p>{{cellsArray.[2]}}</p>
				</div>
			</div>
		</div>
	</script>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="handlebars-v4.0.5.js"></script>
<script src="sheetrock.js"></script>
<script>
$(function() {
	var HRTemplate = Handlebars.compile($('#hr-template').html());
	$('.cards').sheetrock({
	  url: "https://docs.google.com/spreadsheets/d/1i01it-1Lim-rMZ0UTY1rsB3iqk6USqVSZBOprJrYIcQ/edit#gid=0",
	  query: "select A,B,C",
	  fetchSize: 300,
	  rowTemplate: HRTemplate
	});
	$('.flashcard').on('click', function() {
    $(this).toggleClass('flipped');
  });
});
</script>
</body>
</html>
