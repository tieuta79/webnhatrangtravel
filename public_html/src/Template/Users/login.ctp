<?php
$this->Html->addCrumb('Đăng nhập', $this->request->here);
?>
<section class="main-page container">
    <div class="main-container col1-layout">
        <div class="main">
            <div class="col-main">
                <!-- start login-->
                <section class="account-login-area">
                    <div class="login-area">
                        <div class="page-title text-center margin-bottom">
                            <h2 class="no-margin">Xác thực đăng nhập</h2>
                            <p class="no-margin">Vui lòng nhập email, mật khẩu.</p>
                        </div>
                        <div class="row">
                            <?= $this->Form->create('User', ['url' => ['controller' => 'Users', 'action' => 'register'], 'class' => 'form-signin', 'role' => 'form']); ?>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="new-user-box">
                                    <div class="new-user-inner">
                                        <div class="new-user-content">
                                            <span class="account-title">Đăng ký tài khoản mới</span>
                                            <p>Vui lòng nhập email và mật khẩu để đăng ký tài khoản mới.</p>
                                            <?=
                                            $this->Form->input('name', [
                                                'label' => ['class' => 'control-label', 'text' => 'Họ và tên'],
                                                'class' => 'form-control',
                                                'placeholder' => 'Họ và tên',
                                                'templates' => [
                                                    'label' => '<label{{attrs}}>{{text}}</label>',
                                                    'inputContainer' => '<div class="form-group input {{type}}{{required}}">{{content}}</div>',
                                                ]
                                            ]);
                                            ?> 
                                            <?=
                                            $this->Form->input('phone', [
                                                'label' => ['class' => 'control-label', 'text' => 'Số điện thoại'],
                                                'class' => 'form-control',
                                                'placeholder' => 'Số điện thoại',
                                                'templates' => [
                                                    'label' => '<label{{attrs}}>{{text}}</label>',
                                                    'inputContainer' => '<div class="form-group input {{type}}{{required}}">{{content}}</div>',
                                                ]
                                            ]);
                                            ?>  
                                            <?=
                                            $this->Form->input('email', [
                                                'label' => ['class' => 'control-label', 'text' => 'Email'],
                                                'class' => 'form-control',
                                                'placeholder' => 'Email',
                                                'templates' => [
                                                    'label' => '<label{{attrs}}>{{text}}</label>',
                                                    'inputContainer' => '<div class="form-group input {{type}}{{required}}">{{content}}</div>',
                                                ]
                                            ]);
                                            ?>     

                                            <?=
                                            $this->Form->input('password', [
                                                'label' => ['class' => 'control-label', 'text' => 'Mật khẩu'],
                                                'class' => 'form-control',
                                                'placeholder' => 'Mật khẩu',
                                                'templates' => [
                                                    'label' => '<label{{attrs}}>{{text}}</label>',
                                                    'inputContainer' => '<div class="form-group input {{type}}{{required}}">{{content}}</div>',
                                                ]
                                            ]);
                                            ?> 

                                            <?=
                                            $this->Form->input('password_confirm', [
                                                'type' => 'password',
                                                'label' => ['class' => 'control-label', 'text' => 'Nhập lại mật khẩu'],
                                                'class' => 'form-control',
                                                'placeholder' => 'Password Confirm',
                                                'templates' => [
                                                    'label' => '<label{{attrs}}>{{text}}</label>',
                                                    'inputContainer' => '<div class="form-group input {{type}}{{required}}">{{content}}</div>',
                                                ]
                                            ]);
                                            ?>    

                                            <?=
                                            $this->Form->input('role_id', [
                                                'type' => 'hidden',
                                                'value' => 2
                                            ]);
                                            ?>                                             
                                        </div>
                                    </div>
                                    <div class="button-set">
                                        <div class="pull-right">
                                            <button class="btn btn-button blue-bg white btn-hover">Đăng ký</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?= $this->Form->end() ?>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <?= $this->Form->create('User', ['url' => ['controller' => 'Users', 'action' => 'login'], 'class' => 'form-signin', 'role' => 'form']); ?>
                                <div class="new-user-box">
                                    <div class="new-user-inner">
                                        <div class="new-user-content">
                                            <span class="account-title">Đã có tài khoản?</span>
                                            <p class="select-text">Vui lòng nhập email và mật khẩu để đăng nhập </p>
                                            <?=
                                            $this->Form->input('email', [
                                                'label' => ['class' => 'control-label', 'text' => 'Email'],
                                                'class' => 'form-control',
                                                'placeholder' => 'Email',
                                                'templates' => [
                                                    'label' => '<label{{attrs}}>{{text}}</label>',
                                                    'inputContainer' => '<div class="form-group input {{type}}{{required}}">{{content}}</div>',
                                                ]
                                            ]);
                                            ?>  
                                            <?=
                                            $this->Form->input('password', [
                                                'label' => ['class' => 'control-label', 'text' => 'Mật khẩu'],
                                                'class' => 'form-control',
                                                'placeholder' => 'Mật khẩu',
                                                'templates' => [
                                                    'label' => '<label{{attrs}}>{{text}}</label>',
                                                    'inputContainer' => '<div class="form-group input {{type}}{{required}}">{{content}}</div>',
                                                ]
                                            ]);
                                            ?>
                                        </div>
                                    </div>
                                    <div class="button-set">
                                        <div class="pull-right">
                                            <a href="">Quên mật khẩu ?</a>
                                            <button class="btn btn-button blue-bg white btn-hover">Đăng nhập</button>
                                        </div>
                                    </div>
                                </div>
                                <?= $this->Form->end() ?>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end login -->
            </div>
        </div>
    </div>
</section>