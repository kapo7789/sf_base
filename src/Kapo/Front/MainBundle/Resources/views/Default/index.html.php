<?php $view->extend('FrontBundle::layout.html.php') ?>

Hello fucker!

<ul>
<?php foreach($shit as $k=>$v): ?>
	<li><?php echo "$k - $v"; ?></li>
<?php endforeach; ?>
</ul>