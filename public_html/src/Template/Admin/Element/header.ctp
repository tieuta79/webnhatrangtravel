<!--nav-->
<nav role="navigation" class="navbar navbar-custom">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button data-target="#bs-content-row-navbar-collapse-5" data-toggle="collapse" class="navbar-toggle" type="button">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand" style="color: white;">Nha Trang Travel</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="bs-content-row-navbar-collapse-5" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Xin chào <?= $this->request->session()->read('Auth.User.username') ?><b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu">
                        <li>
                            <?= $this->Html->link('Cập nhật thông tin',['controller'=>'Users','action'=>'edit']); ?>
                        </li>   
                        <li>
                            <?= $this->Html->link('Đổi mật khẩu',['controller'=>'Users','action'=>'changePass']); ?>
                        </li>                  
                        <li class="divider"></li>
                        <li>
                            <?= $this->Html->link('Thoát',['controller'=>'Users','action'=>'logout']); ?>
                        </li>
                    </ul>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!--header-->