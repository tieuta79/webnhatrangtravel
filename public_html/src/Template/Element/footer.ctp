<?= $this->element('address'); ?>
<footer class="footer">
    <div class="footer-inner padding-50">
        <div class="footer-right-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="about">
                                <div class="footer-logo">
                                    <?= $this->Html->image('/front/img/logo.png'); ?>
                                </div>
                                <p>Nước trà (hay nước chè) là đồ uống phổ biến thứ hai trên thế giới (sau nước uống). Nó làm bằng cách ngâm lá, chồi, hay cành của cây trà (Camellia sinensis) vào nước sôi từ vài phút đến vài giờ. Lá trà có thể được ôxy hóa (ủ để lên men), sấy rang, phơi, hay pha thêm các loài thảo mộc khác như hoa, gia vị, hay trái cây khác trước khi chế vào nước sôi. Trong phạm vi thức uống chế từ Camellia sinensis thì có bốn loại trà thật: Trà đen, Trà Ô Long, Trà xanh và Trà trắng.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="latest-twite">
                                <h3 class="footer-hadding">Latest Twitter </h3>

                                <div class="twitter-box">
                                    <div class="twitter-left">
                                        <div class="twitter-icon">
                                            <i class="fa fa-twitter"></i>
                                        </div>
                                    </div>
                                    <div class="twitter-right">
                                        <div class="hadding-title"><a href="#">@HaiNGuyen</a></div>
                                        <div class="free-sp-content">
                                            <p>Sản phẩm đặc biệt chỉ với 20 nghìn đồng....</p>
                                        </div>
                                        <div class="twitter-date"><i class="fa fa-calendar"></i><span>Jul,29,2017</span></div>
                                    </div>
                                </div>
                                <div class="twitter-box">
                                    <div class="twitter-left">
                                        <div class="twitter-icon">
                                            <i class="fa fa-twitter"></i>
                                        </div>
                                    </div>
                                    <div class="twitter-right">
                                        <div class="hadding-title"><a href="#">@HaiNguyen</a></div>
                                        <div class="free-sp-content">
                                            <p>Sản phẩm đặc biệt chỉ với 20 nghìn đồng....</p>
                                        </div>
                                        <div class="twitter-date"><i class="fa fa-calendar"></i><span>Jul,29,2017</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="footer-hot-line text-center">
                                <h1>Tel: 0123456789</h1>
                                <p><span>Support</span> 24/24</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 footer-right">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="information footer-info">
                                <h3 class="footer-hadding">Thông tin</h3>
                                <ul>
                                    <li>
                                        <?=
                                        $this->Html->link(
                                                '<i class="fa fa-dot-circle-o footer-icon"></i><span> Về chúng tôi</span>', ['controller' => 'Contents', 'action' => 'view', 'type' => 'page', 'slug' => 've-chung-toi'], ['escape' => false]
                                        );
                                        ?>
                                    </li>
                                    <li>
                                        <?=
                                        $this->Html->link(
                                                '<i class="fa fa-dot-circle-o footer-icon"></i><span> Chính sách</span>', ['controller' => 'Contents', 'action' => 'view', 'type' => 'page', 'slug' => 'chinh-sach'], ['escape' => false]
                                        );
                                        ?>
                                    </li>
                                    <li>
                                        <?=
                                        $this->Html->link(
                                                '<i class="fa fa-dot-circle-o footer-icon"></i><span> Điều khoản</span>', ['controller' => 'Contents', 'action' => 'view', 'type' => 'page', 'slug' => 'dieu-khoan'], ['escape' => false]
                                        );
                                        ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="Account footer-info">
                                <h2 class="footer-hadding">Dịch vụ khách hàng</h2>
                                <ul>
                                    <li>
                                        <?=
                                        $this->Html->link(
                                                '<i class="fa fa-dot-circle-o footer-icon"></i><span> Hướng dẫn đặt hàng</span>', ['controller' => 'Contents', 'action' => 'view', 'type' => 'page', 'slug' => 'huong-dan-dat-hang'], ['escape' => false]
                                        );
                                        ?>
                                    </li>
                                    <li>
                                        <?=
                                        $this->Html->link(
                                                '<i class="fa fa-dot-circle-o footer-icon"></i><span> Hướng dẫn sử dụng</span>', ['controller' => 'Contents', 'action' => 'view', 'type' => 'page', 'slug' => 'huong-dan-su-dung'], ['escape' => false]
                                        );
                                        ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="information footer-info ">
                                <h3 class="footer-hadding">Tài khoản của tôi</h3>
                                <ul>
                                    <li>
                                        <?=
                                        $this->Html->link(
                                                '<i class="fa fa-dot-circle-o footer-icon"></i><span> Đăng ký</span>', ['controller' => 'Users', 'action' => 'login'], ['escape' => false]
                                        );
                                        ?>
                                    </li>
                                    <li>
                                        <?=
                                        $this->Html->link(
                                                '<i class="fa fa-dot-circle-o footer-icon"></i><span> Đăng nhập</span>', ['controller' => 'Users', 'action' => 'login'], ['escape' => false]
                                        );
                                        ?>
                                    </li>
                                    <li>
                                        <?=
                                        $this->Html->link(
                                                '<i class="fa fa-dot-circle-o footer-icon"></i><span> Thông tin tài khoản</span>', ['controller' => 'Users', 'action' => 'myaccount'], ['escape' => false]
                                        );
                                        ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="Account footer-info">
                                <h3 class="footer-hadding">Danh mục</h3>
                                <?= $this->cell('Products::categories'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="footer-social-icon">
                        <ul>
                            <li><a class="facebook" href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a class="google" href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="skype" href=""><i class="fa fa-skype"></i></a></li>
                            <li><a class="feed" href=""><i class="fa fa-feed"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="copyright text-center">&copy;2017 All Rights Reserved. Development by <a href="https://www.facebook.com/tieuta.79">Hai NGuyen</a></p>
</footer>
<!-- / Footer -->
<div style="display: block;" id="top-buttom" class="top-bottom"><span class="top-to-botton "></span></div>
