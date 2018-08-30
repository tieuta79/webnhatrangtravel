<?php
$title = 'WEBSITE CAKEPHP';
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>             
            <?= $this->fetch('title') ?> | <?= $title ?>
        </title>
        <?= $this->Html->meta('icon') ?>

        <?=
        $this->Html->css([
            'font-awesome.min',
            'site.min',
            '//fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic',
            'style'
        ]);
        ?>

        <?=
        $this->Html->script([
            'site.min'
        ]);
        ?>

        <?=
        $this->Html->script([
            'script'
                ], ['block' => 'scriptBottom']);
        ?>        

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body>
        <div class="container">            
            <?= $this->fetch('content') ?>
        </div>
        <div class="clearfix"></div>
        <br><br>
        <?= $this->element('footer'); ?>      
        <?= $this->fetch('scriptBottom') ?>
    </body>
</html>