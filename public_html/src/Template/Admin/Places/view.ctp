<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> Chi tiết <?= h($place->name) ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                    <li class="list-group-item"><?= __('Tài khoản') ?>: <?= $place->has('user') ? $this->Html->link($place->user->name, ['controller' => 'Users', 'action' => 'view', $place->user->id]) : '' ?></li>
                    <li class="list-group-item"><?= __('Khu vực') ?>: <?= $place->has('region') ? $this->Html->link($place->region->name, ['controller' => 'Regions', 'action' => 'view', $place->region->id]) : '' ?></li>
                    <li class="list-group-item"><?= __('Loại địa điểm') ?>: <?= $place->has('typeplace') ? $this->Html->link($place->typeplace->name, ['controller' => 'Typelaces', 'action' => 'view', $place->typeplace->id]) : '' ?></li>
                    <li class="list-group-item"><?= __('Tên') ?>: <?= h($place->name) ?></li>
                    <li class="list-group-item"><?= __('Link rút gọn') ?>: <?= h($place->slug) ?></li>
                    <li class="list-group-item"><?= __('Hình ảnh') ?>: <?php
                                        if (!empty($place->image)) {
                                            echo $this->Html->image($place->image, ['class' => 'img-responsive', 'width' => 300]);
                                        }
                                        ?></li>
                    <li class="list-group-item"><?= __('Giá trung bình') ?>: <?= h($place->price) ?></li>
                    <li class="list-group-item"><?= __('Nội dung') ?>: <?= h($place->descripton) ?></li>
                    <li class="list-group-item"><?= __('Kinh độ') ?>: <?= h($place->longitude) ?></li>
                    <li class="list-group-item"><?= __('vĩ độ') ?>: <?= h($place->latitude) ?></li>
                    <li class="list-group-item"><?= __('Trạng thái') ?>: <?= h($place->status ? __('Yes') : __('No')) ?></li>
                    <li class="list-group-item"><?= __('Nổi bậc') ?>: <?= h($place->featured ? __('Yes') : __('No')) ?></li>
                    <li class="list-group-item"><?= __('Ngày tạo') ?>: <?= h($place->created) ?></li>
                    <li class="list-group-item"><?= __('Ngày cập nhật') ?>: <?= h($place->created) ?></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- panel body -->