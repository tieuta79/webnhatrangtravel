<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> Chi tiết <?= h($typetour->name) ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                    <li class="list-group-item"><?= __('Tên') ?>: <?= h($typetour->name) ?></li>
                    <li class="list-group-item"><?= __('Link rút gọn') ?>: <?= h($typetour->slug) ?></li>
                    <li class="list-group-item"><?= __('Ngày tạo') ?>: <?= h($typetour->created) ?></li>
                    <li class="list-group-item"><?= __('Ngày cập nhật') ?>: <?= h($typetour->created) ?></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- panel body -->