<?php $view->extend('FrontBundle::layout.html.php') ?>

Hello fucker!

<ul>
<?php foreach($cats as $cat): ?>
	<li><?php echo $cat->getName(); ?></li>
<?php endforeach; ?>
</ul>