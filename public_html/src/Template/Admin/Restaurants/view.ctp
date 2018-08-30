<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> Chi tiết <?= h($restaurant->name) ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                    <li class="list-group-item"><?= __('Tài khoản') ?>: <?= $restaurant->has('user') ? $this->Html->link($restaurant->user->name, ['controller' => 'Users', 'action' => 'view', $restaurant->user->id]) : '' ?></li>
                    <li class="list-group-item"><?= __('Khu vực') ?>: <?= $restaurant->has('region') ? $this->Html->link($restaurant->region->name, ['controller' => 'Regions', 'action' => 'view', $restaurant->region->id]) : '' ?></li>
                    <li class="list-group-item"><?= __('Loại địa điểm') ?>: <?= $restaurant->has('typerestaurant') ? $this->Html->link($restaurant->typerestaurant->name, ['controller' => 'Typelaces', 'action' => 'view', $restaurant->typerestaurant->id]) : '' ?></li>
                    <li class="list-group-item"><?= __('Tên') ?>: <?= h($restaurant->name) ?></li>
                    <li class="list-group-item"><?= __('Link rút gọn') ?>: <?= h($restaurant->slug) ?></li>
                    <li class="list-group-item"><?= __('Hình ảnh') ?>: <?php
                                        if (!empty($restaurant->image)) {
                                            echo $this->Html->image($restaurant->image, ['class' => 'img-responsive', 'width' => 300]);
                                        }
                                        ?></li>
                    
                    <li class="list-group-item"><?= __('Nội dung') ?>: <?= h($restaurant->descripton) ?></li>
                    <li class="list-group-item"><?= __('Số sao') ?>: <?= h($restaurant->standard) ?></li>
                    <li class="list-group-item"><?= __('Giá trung bình') ?>: <?= h($restaurant->price) ?></li>
                    <li class="list-group-item"><?= __('Địa chỉ') ?>: <?= h($restaurant->address) ?></li>
                    <li class="list-group-item"><?= __('Giờ mở cửa') ?>: <?= h($restaurant->open) ?></li>
                    <li class="list-group-item"><?= __('Giờ đóng cửa') ?>: <?= h($restaurant->close) ?></li>
                    <li class="list-group-item"><?= __('Link website') ?>: <?= h($restaurant->web) ?></li>
                    <li class="list-group-item"><?= __('Kinh độ') ?>: <?= h($restaurant->longitude) ?></li>
                    <li class="list-group-item"><?= __('vĩ độ') ?>: <?= h($restaurant->latitude) ?></li>
                    <li class="list-group-item"><?= __('Trạng thái') ?>: <?= h($restaurant->status ? __('Yes') : __('No')) ?></li>
                    <li class="list-group-item"><?= __('Nổi bậc') ?>: <?= h($restaurant->featured ? __('Yes') : __('No')) ?></li>
                    <li class="list-group-item"><?= __('Ngày tạo') ?>: <?= h($restaurant->created) ?></li>
                    <li class="list-group-item"><?= __('Ngày cập nhật') ?>: <?= h($restaurant->created) ?></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- panel body -->