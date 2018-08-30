<header>
    <?= $this->element('menutop'); ?>
    <!-- header center -->
    <div class="header-container">
        <div class="container">
            <div class="header-container-box">
                <div class="row">
                    <div class="hidden-xs hidden-sm col-md-4 col-lg-3">
                        <div class="header-shipping-meg">
                            <i class="fa fa-plane"></i>
                            <h4>Vận chuyển toàn quốc</h4>
                            <p>Thủ tục nhanh, tiện lợi.</p>
                            <p>Đơn giản - dễ dàng - tiết kiệm.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-6">
                        <div class="logo text-center">
                            <?=
                            $this->Html->link(
                                    $this->Html->image('/front/img/logo.png'), ['controller' => 'Pages', 'action' => 'display', 'home'], ['escape' => false]
                            );
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="header-shipping-meg ">
                            <i class="fa fa-phone"></i>
                            <h4>Tư vấn 24/24</h4>
                            <p>Hotline tư vấn trực tiếp 24/24.</p>
                            <p>Tel: 0123456789</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header center -->
    <!-- header menu -->
    <div class="header-menu">
        <div class="container">
            <div class="row">
                <?= $this->element('mainmenu'); ?>
                <?= $this->element('search'); ?>
            </div>
        </div>
    </div>
    <!-- / header menu -->
</header>