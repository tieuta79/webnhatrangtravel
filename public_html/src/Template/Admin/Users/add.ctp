<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> <?= __('Thêm người dùng') ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">

        <div class="panel-body">
            <?= $this->Form->create($user, ['type' => 'file', 'role' => 'form']); ?>
            <?php
            echo $this->Form->control('typeusers._ids', [
                'type' => 'select',
                'label' => 'Danh mục loại người dùng',
                'class' => 'form-control',
                'options' => $typeusers,
                'templates' => [
                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                ]
            ]);
            echo $this->Form->input('username', [
                'label' => 'Tên tài khoản',
                'class' => 'form-control',
                'templates' => [
                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                ]
            ]);
            echo $this->Form->input('password', [
                'label' => 'Mật khẩu',
                'type' => 'password',
                'class' => 'form-control',
                'templates' => [
                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                ]
            ]);
            echo $this->Form->input('image', [
                'data-type' => 'editor',
                'label' => 'Hình dại diện',
                'class' => 'form-control',
                'templates' => [
                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                ]
            ]);
            echo $this->Form->input('cover', [
                'data-type' => 'editor',
                'label' => 'Ảnh bìa',
                'class' => 'form-control',
                'templates' => [
                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                ]
            ]);
            echo $this->Form->input('email', [
                'label' => 'Email',
                'class' => 'form-control',
                'templates' => [
                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                ]
            ]);
            echo $this->Form->input('name', [
                'label' => 'Tên',
                'class' => 'form-control',
                'data-type' => 'editor',
                'templates' => [
                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                ]
            ]);

            echo $this->Form->input('address', [
                'label' => 'Địa chỉ',
                'class' => 'form-control',
                'templates' => [
                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                ]
            ]);
            
            echo $this->Form->input('phone', [
                'label' => 'Số điện thoại',
                'class' => 'form-control',
                'templates' => [
                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                ]
            ]);
            echo $this->Form->input('sex', [
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
            
            echo $this->Form->input('facebook', [
                'label' => 'Facebook',
                'class' => 'form-control',
                'templates' => [
                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                ]
            ]);
            echo $this->Form->input('description', [
                'label' => 'Mô tả',
                'class' => 'form-control',
                'data-type' => 'editor',
                'templates' => [
                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                ]
            ]);
            echo $this->Form->input('birthday', [
                'label' => 'Ngày sinh',
                'class' => 'form-control',
                'minYear' => date('Y') - 50,
                'minYear' => date('Y') - 50,
                'maxYear' => date('Y') - 10,
                'templates' => [
                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                    'select' => '<select class="form-control" name="{{name}}"{{attrs}}>{{content}}</select>',
                ]
            ]);
            
            ?>              
            <?= $this->Form->button(__('Lưu'), ['class' => 'btn btn-default']); ?>
            <?= $this->Form->end() ?>
        </div>

    </div>
</div><!-- panel body -->