<?php $view->extend('::base.html.php') ?>

<?php echo $view['knp_menu']->render('FrontBundle:Builder:mainMenu'); ?>

<?php $view['slots']->output('_content') ?>