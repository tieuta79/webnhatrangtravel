<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> <?= __('Sửa hình ảnh khu vực') ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">

        <div class="panel-body">
            <?= $this->Form->create($imageregion, ['role' => 'form','type'=>'file']); ?>
            <?php
            echo $this->Form->input('region_id', [
                'label' => 'Khu vực',
                'class' => 'form-control',
                'templates' => [
                    'inputContainer' => '<div class="input form-group {{type}}{{required}}">{{content}}</div>',
                ]
            ]);
            echo $this->Form->input('name', [
                'label' => 'Tên hình ảnh',
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

            echo $this->Form->control('status');

            echo $this->Form->control('featured');
            ?>              
            <?= $this->Form->button(__('Lưu'), ['class' => 'btn btn-default']); ?>
            <?= $this->Form->end() ?>
        </div>

    </div>
</div><!-- panel body -->