<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>WELCOME!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('css/bootstrap.css'); ?>" />
        <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('css/bootstrap-responsive.css'); ?>" />
        <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('css/style.css'); ?>" />
    </head>
    <body>
    	<div class="content">
        	<?php $view['slots']->output('_content') ?>
    	</div>
	<script src="<?php echo $view['assets']->getUrl('js/bootstrap.min.js') ?>" type="text/javascript"></script>
    </body>
</html>
