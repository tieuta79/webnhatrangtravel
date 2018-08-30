<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> Chi tiết <?= h($feedback->name) ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                    <li class="list-group-item"><?= __('Tài khoản') ?>: <?= $feedback->has('user') ? $this->Html->link($feedback->user->name, ['controller' => 'Users', 'action' => 'view', $feedback->user->id]) : '' ?></li>
                    <li class="list-group-item"><?= __('Nội dung') ?>: <?= h($feedback->descripton) ?></li>
                    <li class="list-group-item"><?= __('Ngày tạo') ?>: <?= h($feedback->created) ?></li>
                    <li class="list-group-item"><?= __('Ngày cập nhật') ?>: <?= h($feedback->created) ?></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- panel body -->