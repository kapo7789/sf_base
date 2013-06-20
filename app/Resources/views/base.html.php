<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>WELCOME!</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    </head>
    <body>
        <?php $view['slots']->output('_content') ?>
    </body>
</html>
