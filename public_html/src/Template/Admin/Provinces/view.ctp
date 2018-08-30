<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> Chi tiết <?= h($province->name) ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                    <li class="list-group-item"><?= __('Tên') ?>: <?= h($province->name) ?></li>
                    <li class="list-group-item"><?= __('Vĩ độ') ?>: <?= h($province->latitude) ?></li>
                    <li class="list-group-item"><?= __('Kinh độ') ?>: <?= h($province->longitude) ?></li>
                    <li class="list-group-item"><?= __('Nội dung') ?>: <?= h($province->descripton) ?></li>
                    <li class="list-group-item"><?= __('Ngày tạo') ?>: <?= h($province->created) ?></li>
                    <li class="list-group-item"><?= __('Ngày cập nhật') ?>: <?= h($province->created) ?></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- panel body -->