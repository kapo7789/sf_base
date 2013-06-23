<?php $view->extend('FrontBundle::layout.html.php') ?>

<div class="row-fluid">
	<div class="span4">
		<ul>
		<?php foreach($cats as $cat): ?>
			<li><?php echo $cat->getName(); ?></li>
		<?php endforeach; ?>
		</ul>
	</div>
	<div class="span4">
		<ul>
		<?php foreach($cats as $cat): ?>
			<li><?php echo $cat->getName(); ?></li>
		<?php endforeach; ?>
		</ul>
	</div>
	<div class="span4">
		<ul>
		<?php foreach($cats as $cat): ?>
			<li><?php echo $cat->getName(); ?></li>
		<?php endforeach; ?>
		</ul>
	</div>
</div>