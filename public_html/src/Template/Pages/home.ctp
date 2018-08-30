<?= $this->element('slideshow'); ?>
<?= $this->cell('Products::featured'); ?>
<?= $this->cell('Products::promotion'); ?>
<?= $this->cell('Products::newproduct'); ?>
<!-- promo-2 banner  -->
<div class="promo-2 full-width-banner padding-45">
    <div class="container resbaner">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="promo promo-2-item-1">
                    <?= $this->Html->image('/front/img/promo-2_promo-1.png'); ?>
                    <h1>Sản phẩm</h1>
                    <h2>Độc quyền</h2>
                    <h3>Phân phối </h3>
                    <h4>2017</h4>
                    <a href="http://teashop.com:82/doc-quyen-phan-phoi" class="btn btn-button white-bg btn-hover">Bây giờ</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="promo promo-2-item-2">
                    <a href="#"><?= $this->Html->image('/front/img/promo-2_promo-2.png'); ?></a>
                    <h1>Trà lạnh</h1>
                    <h3>Giảm giá</h3>
                    <h2>10%</h2>
                </div>
                <div class="promo promo-2-item-3 margin-30">
                    <a href="#"><?= $this->Html->image('/front/img/promo-2_promo-3.png'); ?></a>
                    <h1>Trà nóng</h1>
                    <h3>chỉ với</h3>
                    <span>15K</span>
                </div>
            </div>
            <div class="hidden-sm col-md-4">
                <div class="promo promo-2-item-4">
                    <?= $this->Html->image('/front/img/promo-2_promo-4.png'); ?>
                    <h1>Tất cả</h1>
                    <h3>Trong một </h3>
                    <h2>Chỉ 1 sản phẩm</h2>
                    <a class="btn btn-button white-bg btn-hover" href="http://teashop.com:82/tat-ca-trong-1">Bây giờ</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / promo-2 banner  -->
<?= $this->cell('Contents::featured'); ?>
<?= $this->element('partner'); ?>