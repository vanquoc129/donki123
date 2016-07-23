<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= __("Web Title") ?>
        </title>

        <?= $this->Html->meta('icon') ?>

        <?= $this->Html->css('/semantic/semantic.min', [block => 'top_css']) ?>
        <?=
        $this->Html->css([
            'style',
            'donki123_layout'
                ], [block => 'bottom_css'])
        ?>

        <?=
        $this->Html->script([
            'jquery-3.1.0.min',
            '/semantic/semantic.min'
                ], [block => 'top_js']);
        ?>

        <?= $this->Html->script('donki123_defaut', [block => 'bottom_js']) ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('top_css') ?>
        <?= $this->fetch('bottom_css') ?>
    </head>
    <body>
        <div class="ui banner container">
            <h1>Banner</h1>
        </div>
        <div class="ui red menu">
            <h3 class="header item">Brand</h3>
            <a class="item">tab1</a>
            <a class="item">tab2</a>
        </div>
        <div class="ui accordion container">
            <div class="title">
                <i class="dropdown icon"></i>
                Drop down
            </div>
            <div class="content">
                <div class="ui one column grid">
                    <div class="column computer only">
                        <div class="ui message red">
                            <div class="ui horizontal divider">
                                <i class="github icon"></i>
                            </div>
                            column 1 column 1 column 1 column 1 column 1 column 1 
                            column 1 column 1 column 1 column 1 column 1 column 1 
                            column 1 column 1 column 1 column 1 column 1 column 1 
                            column 1 column 1 column 1 column 1 column 1 column 1 
                            column 1 column 1 column 1 column 1 column 1 column 1 
                            column 1 column 1 column 1 column 1 column 1 column 1 
                            column 1 column 1 column 1 column 1 column 1 column 1 
                            column 1 column 1 column 1 column 1 column 1 column 1 
                        </div>
                    </div>
                    <div class="column mobile only">
                        <div class="ui message green">
                            column 2 column 2 column 2 column 2 column 2 column 2 column 2 
                            column 2 column 2 column 2 column 2 column 2 column 2 column 2 
                            column 2 column 2 column 2 column 2 column 2 column 2 column 2 
                            column 2 column 2 column 2 column 2 column 2 column 2 column 2 
                            column 2 column 2 column 2 column 2 column 2 column 2 column 2 
                            column 2 column 2 column 2 column 2 column 2 column 2 column 2 
                        </div>
                    </div>
                    <div class="column">
                        <div class="ui message yellow">
                            column 3 column 3 column 3 column 3 column 3 column 3 column 3 
                            column 3 column 3 column 3 column 3 column 3 column 3 column 3 
                            column 3 column 3 column 3 column 3 column 3 column 3 column 3 
                            column 3 column 3 column 3 column 3 column 3 column 3 column 3 
                        </div>
                    </div>
                    <div class="column">
                        <div class="ui message blue">
                            column 4 column 4 column 4 column 4 column 4 column 4 column 4 
                            column 4 column 4 column 4 column 4 column 4 column 4 column 4 
                            column 4 column 4 column 4 column 4 column 4 column 4 column 4 
                            column 4 column 4 column 4 column 4 column 4 column 4 column 4 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui accordion container">
            <div class="title">
                <i class="dropdown icon"></i>
                Drop down
            </div>
            <div class="content">
                <div class="ui one column grid">
                    <div class="column computer only">
                        <div class="ui message red">
                            <div class="ui horizontal divider">
                                <i class="github icon"></i>
                            </div>
                            column 1 column 1 column 1 column 1 column 1 column 1 
                            column 1 column 1 column 1 column 1 column 1 column 1 
                            column 1 column 1 column 1 column 1 column 1 column 1 
                            column 1 column 1 column 1 column 1 column 1 column 1 
                            column 1 column 1 column 1 column 1 column 1 column 1 
                            column 1 column 1 column 1 column 1 column 1 column 1 
                            column 1 column 1 column 1 column 1 column 1 column 1 
                            column 1 column 1 column 1 column 1 column 1 column 1 
                        </div>
                    </div>
                    <div class="column mobile only">
                        <div class="ui message green">
                            column 2 column 2 column 2 column 2 column 2 column 2 column 2 
                            column 2 column 2 column 2 column 2 column 2 column 2 column 2 
                            column 2 column 2 column 2 column 2 column 2 column 2 column 2 
                            column 2 column 2 column 2 column 2 column 2 column 2 column 2 
                            column 2 column 2 column 2 column 2 column 2 column 2 column 2 
                            column 2 column 2 column 2 column 2 column 2 column 2 column 2 
                        </div>
                    </div>
                    <div class="column">
                        <div class="ui message yellow">
                            column 3 column 3 column 3 column 3 column 3 column 3 column 3 
                            column 3 column 3 column 3 column 3 column 3 column 3 column 3 
                            column 3 column 3 column 3 column 3 column 3 column 3 column 3 
                            column 3 column 3 column 3 column 3 column 3 column 3 column 3 
                        </div>
                    </div>
                    <div class="column">
                        <div class="ui message blue">
                            column 4 column 4 column 4 column 4 column 4 column 4 column 4 
                            column 4 column 4 column 4 column 4 column 4 column 4 column 4 
                            column 4 column 4 column 4 column 4 column 4 column 4 column 4 
                            column 4 column 4 column 4 column 4 column 4 column 4 column 4 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?= $this->fetch('content') ?>
        
        <?= $this->fetch('top_js') ?>
        <?= $this->fetch('bottom_js') ?>
    </body>
</html>
