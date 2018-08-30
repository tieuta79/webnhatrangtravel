<div class="top-bar">
    <div class="container">
        <div class="top-bar-inner">
            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8 top-links">
                    <!--  top links  -->
                    <ul class="nav navbar-nav pull-left">
                        <?php if ($this->request->session()->check('Auth.User.id')): ?>
                            <li>
                                <?=
                                $this->Html->link(
                                        '<span class="fa fa-sign-out"></span>Đăng xuất', ['controller' => 'Users', 'action' => 'logout'], ['escape' => false]
                                );
                                ?>
                            </li>   
                            <li>
                                <?=
                                $this->Html->link(
                                        '<span class="fa fa-user"></span>' . $this->request->session()->read('Auth.User.name'), ['controller' => 'Users', 'action' => 'myaccount'], ['escape' => false]
                                );
                                ?>
                            </li>                            
                        <?php else: ?>
                            <li>
                                <?=
                                $this->Html->link(
                                        '<span class="fa fa-lock"></span>Đăng nhập', ['controller' => 'Users', 'action' => 'login'], ['escape' => false]
                                );
                                ?>
                            </li>
                            <li>
                                <?=
                                $this->Html->link(
                                        '<span class="fa fa-user"></span>Tài khoản của tôi', ['controller' => 'Users', 'action' => 'myaccount'], ['escape' => false]
                                );
                                ?>
                            </li>                            
                        <?php endif; ?>
                    </ul>
                    <!-- / top links -->
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 lang-currency">
                    <ul class="nav navbar-nav pull-right">
                        <!--start lan -->
                        <li class="list-line dropdown flags">
                            <?=
                            $this->Html->link(
                                    $this->Html->image('/front/img/flag.png') .
                                    ' <span>vietnamese</span><i class="fa fa-angle-down"></i>', '#', ['data-toggle' => 'dropdown', 'class' => 'dropdown-toggle', 'escape' => false]
                            );
                            ?>
                            <ul class="dropdown-menu sfmenuffect">
                                <li>
                                    <?=
                                    $this->Html->link(
                                            $this->Html->image('/front/img/flag.png') .
                                            ' <span>vietnam</span>', '#', ['escape' => false]
                                    );
                                    ?>
                                </li>
                            </ul>
                        </li>
                        <!--end lan  -->
                        <!--start currency -->
                        <li class="list-line dropdown currency">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                <i class=""></i>
                                <span>vnd</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu sfmenuffect">
                                <li>
                                    <a href="#">
                                        <i class=""></i>
                                        <span>vnd</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>