<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> <?= __('Sửa sự kiện') ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">

        <div class="panel-body">
            <?= $this->Form->create($event, ['typeusers' => 'form','type'=>'file']); ?>
            <?php
            echo $this->Form->input('title', [
                'label' => 'Tiêu đề',
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
            echo $this->Form->input('content', [
                'label' => 'Nội dung',
                'class' => 'form-control',
                'data-type' => 'editor',
                'templates' => [
                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                ]
            ]);

            echo $this->Form->input('start', [
                'label' => 'Thời gian bắt đầu',
                'class' => 'form-control',
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