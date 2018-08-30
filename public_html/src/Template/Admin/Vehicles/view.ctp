<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> Chi tiết <?= h($vehicle->name) ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                    <li class="list-group-item"><?= __('Tài khoản') ?>: <?= $vehicle->has('user') ? $this->Html->link($vehicle->user->name, ['controller' => 'Users', 'action' => 'view', $vehicle->user->id]) : '' ?></li>
                    <li class="list-group-item"><?= __('Khu vực') ?>: <?= $vehicle->has('region') ? $this->Html->link($vehicle->region->name, ['controller' => 'Regions', 'action' => 'view', $vehicle->region->id]) : '' ?></li>
                    <li class="list-group-item"><?= __('Loại địa điểm') ?>: <?= $vehicle->has('typevehicle') ? $this->Html->link($vehicle->typevehicle->name, ['controller' => 'Typelaces', 'action' => 'view', $vehicle->typevehicle->id]) : '' ?></li>
                    <li class="list-group-item"><?= __('Tên') ?>: <?= h($vehicle->name) ?></li>
                    <li class="list-group-item"><?= __('Link rút gọn') ?>: <?= h($vehicle->slug) ?></li>
                    <li class="list-group-item"><?= __('Hình ảnh') ?>: <?php
                                        if (!empty($vehicle->image)) {
                                            echo $this->Html->image($vehicle->image, ['class' => 'img-responsive', 'width' => 300]);
                                        }
                                        ?></li>
                    <li class="list-group-item"><?= __('Giá trung bình') ?>: <?= h($vehicle->price) ?></li>
                    <li class="list-group-item"><?= __('Nội dung') ?>: <?= h($vehicle->descripton) ?></li>
                    <li class="list-group-item"><?= __('Link website') ?>: <?= h($vehicle->web) ?></li>
                    <li class="list-group-item"><?= __('Trạng thái') ?>: <?= h($vehicle->status ? __('Yes') : __('No')) ?></li>
                    <li class="list-group-item"><?= __('Nổi bậc') ?>: <?= h($vehicle->featured ? __('Yes') : __('No')) ?></li>
                    <li class="list-group-item"><?= __('Ngày tạo') ?>: <?= h($vehicle->created) ?></li>
                    <li class="list-group-item"><?= __('Ngày cập nhật') ?>: <?= h($vehicle->created) ?></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- panel body -->