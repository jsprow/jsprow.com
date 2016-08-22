<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

	<link rel="stylesheet" href="/css/print.css">
  <title>EMA Catering Menu</title>
</head>
<body>
  <h1>EMA Catering Menu</h1>
	<div class="item">
		<h2>To Schedule</h2>
		<p>Please call us at either number below </p>
		<p><strong>269-207-9381 / 269-254-5388</strong></p>
	</div>
	<?php
		include('simple_html_dom.php');
		$html = file_get_html('index.php');
		foreach ($html->find('div.printable') as $div) {
			foreach ($div->find('h2') as $h2) {
				print '<div class="item"><ul>' . $h2;
			};
			foreach ($div->find('p[!class]') as $p) {
				print '<li>' . $p . '</li>';
			}
		}
		print '</ul></div>';
		// print $e;
	?>
</body>
</html>
