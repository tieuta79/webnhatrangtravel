<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> Chi tiết <?= h($region->name) ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                    <li class="list-group-item"><?= __('Tỉnh') ?>: <?= $region->has('province') ? $this->Html->link($region->province->name, ['controller' => 'Provinces', 'action' => 'view', $region->province->id]) : '' ?></li>
                    <li class="list-group-item"><?= __('Tên') ?>: <?= h($region->name) ?></li>
                    <li class="list-group-item"><?= __('Link rút gọn') ?>: <?= h($region->slug) ?></li>
                    <li class="list-group-item"><?= __('Hình ảnh') ?>: <?php
                                        if (!empty($region->image)) {
                                            echo $this->Html->image($region->image, ['class' => 'img-responsive', 'width' => 300]);
                                        }
                                        ?></li>
                    
                    <li class="list-group-item"><?= __('Nội dung') ?>: <?= h($region->description) ?></li>
                    <li class="list-group-item"><?= __('Vĩ độ') ?>: <?= h($region->latitude) ?></li>
                    <li class="list-group-item"><?= __('Kinh độ') ?>: <?= h($region->longitude) ?></li>
                    <li class="list-group-item"><?= __('Ngày tạo') ?>: <?= h($region->created) ?></li>
                    <li class="list-group-item"><?= __('Ngày cập nhật') ?>: <?= h($region->created) ?></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- panel body -->