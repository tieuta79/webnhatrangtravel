
<div class="col-md-8">
    <div class="nav-container">
        <nav class="navigation" id="sf-menu">
            <ul class="sf-menu sf-js-enabled sf-arrow product-menu">
                <li class="active sfish-menu">
                    <?= $this->Html->link('<span class="home-icon"></span>Trang chủ', ['controller' => 'Pages', 'action' => 'display', 'home'], ['escape' => false]); ?>
                </li>
                <li class="megamenu">
                    <a href="">Nổi bậc<i aria-hidden="true" class="fa fa-angle-down"></i></a>
                    <ul class="mmenuffect">
                        <li class="product-container">
                            <?= $this->cell('Products::featured', [3])->render('menu_featured'); ?>
                        </li>
                    </ul>
                </li>

                <li class="megamenu">
                    <a href="">Đánh giá cao <i aria-hidden="true" class="fa fa-angle-down"></i></a>
                    <?= $this->cell('Products::comments'); ?>
                </li>
                <li class="megamenu">
                    <a href="http://teashop.com:82/contents/blog">Tin Tức<i aria-hidden="true" class="fa fa-angle-down"></i></a>
                    <ul class="mmenuffect">
                        <li>
                            <?= $this->cell('Contents::featured', [2])->render('menu_featured'); ?>
                        </li>
                    </ul>
                </li>
                <li class="megamenu">
                    <a href="">Danh mục<i aria-hidden="true" class="fa fa-angle-down"></i></a>
                    <?= $this->cell('Products::categories', [1])->render('menu_categories'); ?>
                </li>

            </ul>
        </nav>
    </div>
    
    <div class="mobile-container hidden-md hidden-lg" style="display: none">
        <div class="mobile-menu-toggle">
            <ul>
                <li class="toggle-icon"><a href="#">Danh mục chính</a></li>
            </ul>
        </div>
        <div style="display: none;" class="mobile-main-menu">
            <ul class="accordion">
                <li class="home">
                    <?= $this->Html->link('Trang chủ', ['controller' => 'Pages', 'action' => 'display', 'home'], ['escape' => false]); ?>
                </li>
                <li class="parent ">
                    <a href="#">Danh mục</a>
                    <?= $this->cell('Products::categories', [1])->render('menu_mobile_categories'); ?>
                    <span class="down-up">&nbsp;</span>
                </li>
            </ul>
        </div>
    </div>
</div>
