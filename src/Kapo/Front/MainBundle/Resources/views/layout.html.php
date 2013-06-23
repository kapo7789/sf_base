<?php $view->extend('::base.html.php') ?>

<div class="row-fluid">
	<div class="span3">
		<div class="logo"><img src="<?php echo $view['assets']->getUrl('img/logo.png'); ?>" /></div>
		<?php echo $view['knp_menu']->render('FrontBundle:Builder:mainMenu'); ?>
	</div>
	<div class="span9">
		<?php $view['slots']->output('_content') ?>
	</div>
</div>