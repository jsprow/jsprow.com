<!DOCTYPE html>
<html>
<head>
	<title><?php echo $page->title() ?></title>
	<?php echo css('assets/css/ema.css') ?>
</head>

<body>
	<header>	
		<?php snippet('header') ?>
	</header>
	<main>
		<h1>About Us</h1>
		<div class="item">
			<?php echo $page->about() ?>
		</div>
		<h1>Ordering Information</h1>
		<?php foreach($page->orderinfo()->yaml() as $info): ?>
			<div class="item">
				<h2><?php echo $info['item_name'] ?></h2>
				<p><?php echo $info['item_description'] ?></p>
			</div>
		<?php endforeach ?>
		<h1>Early Risers</h1>
		<?php foreach($page->breakfast()->yaml() as $item): ?>
		  <div class="item">
		  	<img src="<?php $img = $page->images()->find($item['item_image']); echo $img->url(); ?>" />
		    <h2><?php echo $item['item_name'] ?></h2>
		    <p><?php echo $item['item_description'] ?></p>
		  </div>
		<?php endforeach ?>
		<h1>Lunch Time</h1>
		<?php foreach($page->lunch()->yaml() as $item): ?>
		  <div class="item">
		  	<img src="<?php $img = $page->images()->find($item['item_image']); echo $img->url(); ?>" />
		    <h2><?php echo $item['item_name'] ?></h2>
		    <p><?php echo $item['item_description'] ?></p>
		  </div>
		<?php endforeach ?>

	</main>
	<footer>
	</footer>
</body>
</html>