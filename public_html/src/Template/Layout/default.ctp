<?php
$cakeDescription = 'Nhatrangtravel';
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?= $this->fetch('title') ?> | <?= $cakeDescription ?>            
        </title>
        <?= $this->Html->meta('icon') ?>

        <?=
        $this->Html->css([
            '/front/css/bootstrap.min',
            '/front/css/jquery-ui.min',
            '/front/css/owl.carousel',
            '/front/css/themestyles',
            '/front/css/slider',
            '/front/css/nivo-slider',
            '/front/css/animate',
            '/front/css/responsive',
            '/front/css/magnific-popup',
            '/front/css/font-awesome.min'
        ])
        ?>
        <?=
        $this->Html->script([
            '/front/js/jquery-1.11.3.min',
            '/front/js/jquery-ui.min',
            '/front/js/bootstrap.min'
        ]);
        ?>
        <?=
        $this->Html->script([
            '/front/js/jquery.elevatezoom',
            '/front/js/owl.carousel.min',
            '/front/js/jquery.nivo.slider',
            '/front/js/jquery.magnific-popup.min',
            '/front/js/jquery.plugin.min',
            '/front/js/jquery.countdown.min',
            '/front/js/jquery.accordion.source',
            '/front/js/jquery.ddslick.min',
            '/front/js/theme'
                ], ['block' => 'bottomScript']);
        ?>        

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body>
        <div class="wrapper">
            <div class="page">
                <?= $this->element('header'); ?>
                <?php
                if ($this->request->action == 'display'):
                    echo $this->fetch('content');
                else:
                    ?>
                    <section class="breadcrumb-area padding-30">
                        <div class="container">
                            <div class="breadcrumb breadcrumb-box">
                                <?= $this->Html->getCrumbList(['escape' => false], '<span class="fa fa-home"><span>Trang chủ</span></span>'); ?>
                            </div>
                        </div>
                    </section>
                    <?php if ($this->fetch('two-col')): ?>
                        <section class="main-page container">
                            <div class="main-container col2-left-layout">
                                <div class="main">
                                    <div class="row">
                                        <?= $this->element('left'); ?>
                                        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                            <div class="col-main">
                                                <?= $this->fetch('content') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <?php
                    else:
                        if ($this->fetch('two-col-right')):
                            ?>
                            <section class="main-page container">
                                <div class="main-container col2-left-layout">
                                    <div class="main">
                                        <div class="row">
                                            <div class="ol-sm-9 col-md-9 col-lg-9">
                                                <div class="col-main">
                                                    <?= $this->fetch('content') ?>
                                                </div>
                                            </div>
                                            <?= $this->element('right'); ?>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        <?php else: ?>
                            <?= $this->fetch('content') ?>
                        <?php endif; ?>

                    <?php endif; ?>
                <?php endif; ?>
                <?= $this->element('footer'); ?>
            </div>
        </div>
        <?= $this->fetch('bottomScript') ?>
    </body>
</html>
