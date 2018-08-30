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
            'summernote',
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
            'summernote.min',
            'script'
                ], ['block' => 'scriptBottom']);
        ?>        
        <script type="text/javascript">
            var baseurl = '<?= $this->request->webroot; ?>';
        </script>
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body>
        <?= $this->element('header'); ?>
        <div class="container-fluid">
            <!--documents-->
            <div class="row row-offcanvas row-offcanvas-left">
                <?= $this->element('sidebar'); ?>
                <div class="col-xs-12 col-sm-9 content">
                    <div class="panel panel-primary">
                        <?= $this->Flash->render() ?>
                        <?= $this->fetch('content') ?>
                    </div>
                </div><!-- content -->
            </div>
        </div>
        <?= $this->fetch('scriptBottom') ?>
    </body>
</html>