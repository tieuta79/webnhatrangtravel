<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> <?= __('Sửa tour') ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">

        <div class="panel-body">
            <?= $this->Form->create($tour, ['type' => 'file', 'role' => 'form']); ?>
            <?php
            echo $this->Form->control('users._ids', [
                'type' => 'select',
                'label' => 'Danh mục người dùng',
                'class' => 'form-control',
                'options' => $users,
                'templates' => [
                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                ]
            ]);
            echo $this->Form->control('regions._ids', [
                'type' => 'select',
                'label' => 'Danh mục khu vực',
                'class' => 'form-control',
                'options' => $regions,
                'templates' => [
                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                ]
            ]);
            echo $this->Form->control('typetours._ids', [
                'type' => 'select',
                'label' => 'Danh mục loại tour',
                'class' => 'form-control',
                'options' => $typetours,
                'templates' => [
                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                ]
            ]);
            echo $this->Form->input('name', [
                'label' => 'Tên',
                'class' => 'form-control',
                'templates' => [
                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                ]
            ]);
            echo $this->Form->input('slug', [
                'label' => 'Link rút gọn',
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
            echo $this->Form->input('price', [
                'label' => 'Giá vé',
                'class' => 'form-control',
                'templates' => [
                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                ]
            ]);
            echo $this->Form->input('descripton', [
                'label' => 'Nội dung',
                'class' => 'form-control',
                'data-type' => 'editor',
                'templates' => [
                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                ]
            ]);

            echo $this->Form->input('web', [
                'label' => 'Link website',
                'class' => 'form-control',
                'templates' => [
                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                ]
            ]);
            
            echo $this->Form->input('start', [
                'label' => 'Thời gian bắt đầu',
                'class' => 'form-control',
                'minYear' => date('Y') - 50,
                'minYear' => date('Y') - 50,
                'maxYear' => date('Y') - 10,
                'templates' => [
                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                    'select' => '<select class="form-control" name="{{name}}"{{attrs}}>{{content}}</select>',
                ]
            ]);

            echo $this->Form->input('end', [
                'label' => 'Thời gian kết thúc',
                'class' => 'form-control',
                'minYear' => date('Y') - 50,
                'minYear' => date('Y') - 50,
                'maxYear' => date('Y') - 10,
                'templates' => [
                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                    'select' => '<select class="form-control" name="{{name}}"{{attrs}}>{{content}}</select>',
                ]
            ]);

            echo $this->Form->control('status');

            echo $this->Form->control('featured');
            ?>              
            <?= $this->Form->button(__('Lưu'), ['class' => 'btn btn-default']); ?>
            <?= $this->Form->end() ?>
        </div>

    </div>
</div><!-- panel body -->