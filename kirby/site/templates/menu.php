<!DOCTYPE html>
<html>
<head>
	<title><?php echo $page->title() ?></title>
	<?php echo css('assets/css/menu.css') ?>
</head>

<body>
<header>	
	<?php snippet('header') ?>
</header>
<main>
	<h1><?php echo $page->title() ?></h1>
	<?php foreach($page->items()->yaml() as $item): ?>
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