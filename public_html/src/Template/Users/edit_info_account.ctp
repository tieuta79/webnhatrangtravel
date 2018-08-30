<section class="main-page container">
    <div class="main-container col1-layout">
        <div class="main">
            <div class="col-main">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <a href="javascript:void(0);" class="toggle-sidebar">
                            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
                        </a> Cập nhật thông tin
                    </h3>
                </div>

                <div class="panel-body">
                    <div class="content-row">

                        <div class="panel-body">
                            <?= $this->Form->create($user, ['role' => 'form']); ?>
                            <?php
                            echo $this->Form->input('name', [
                                'label' => 'Họ và tên',
                                'class' => 'form-control',
                                'templates' => [
                                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                                ]
                            ]);

                            if ($update == false) {
                                echo $this->Form->input('username', [
                                    'label' => 'Username',
                                    'class' => 'form-control',
                                    'templates' => [
                                        'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                                    ]
                                ]);

                                echo $this->Form->input('password', [
                                    'label' => 'Mật khẩu',
                                    'class' => 'form-control',
                                    'templates' => [
                                        'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                                    ]
                                ]);
                            }

                            echo $this->Form->input('email', [
                                'label' => 'Email',
                                'class' => 'form-control',
                                'templates' => [
                                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                                ]
                            ]);

                            echo $this->Form->input('birthday', [
                                'label' => 'Ngày sinh',
                                'class' => 'form-control',
                                'minYear' => date('Y') - 50,
                                'maxYear' => date('Y') - 10,
                                'templates' => [
                                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                                    'select' => '<select class="form-control" name="{{name}}"{{attrs}}>{{content}}</select>',
                                ]
                            ]);

                            echo $this->Form->input('gender', [
                                'type' => 'select',
                                'label' => 'Giới tính',
                                'class' => 'form-control',
                                'options' => [
                                    0 => 'Nữ',
                                    1 => 'Nam'
                                ],
                                'templates' => [
                                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                                ]
                            ]);

                            echo $this->Form->input('phone', [
                                'label' => 'Điện thoại',
                                'class' => 'form-control',
                                'templates' => [
                                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                                ]
                            ]);

                            echo $this->Form->input('role_id', [
                                'type' => 'select',
                                'label' => 'Giới tính',
                                'class' => 'form-control',
                                'options' => $roles,
                                'templates' => [
                                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                                ]
                            ]);
                            ?>              
                            <?= $this->Form->button(__('Lưu'), ['class' => 'btn btn-default']); ?>
                            <?= $this->Form->end() ?>
                        </div>

                    </div>
                </div><!-- panel body -->
            </div>
        </div>
    </div>
</section>