<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= __("Web Title") ?>
        </title>

        <?= $this->Html->meta('icon') ?>
        <?= $this->Html->css('bootstrap.min', ['block' => 'top_css']); ?>
        <?=
        $this->Html->css([
            'style',
            'app'
                ], ['block' => 'bottom_css'])
        ?>

        <?=
        $this->Html->script([
            'jquery-3.1.0.min',
            'bootstrap.min'
                ], ['block' => 'top_js']);
        ?>

        <?= $this->Html->script('app', ['block' => 'bottom_js']) ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('top_css') ?>
        <?= $this->fetch('bottom_css') ?>
    </head>
    <body>
        <?= $this->fetch('content') ?>
        
        <?= $this->fetch('top_js') ?>
        <?= $this->fetch('bottom_js') ?>
    </body>
</html>
