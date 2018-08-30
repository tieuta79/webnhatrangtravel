<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> <?= __('Thêm loại món ăn') ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">

        <div class="panel-body">
            <?= $this->Form->create($typefood, ['type' => 'file', 'role' => 'form']); ?>
            <?php
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
            ?>              
            <?= $this->Form->button(__('Lưu'), ['class' => 'btn btn-default']); ?>
            <?= $this->Form->end() ?>
        </div>

    </div>
</div><!-- panel body -->