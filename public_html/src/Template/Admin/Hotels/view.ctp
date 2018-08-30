<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> Chi tiết <?= h($hotel->name) ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                    <li class="list-group-item"><?= __('Tài khoản') ?>: <?= $hotel->has('user') ? $this->Html->link($hotel->user->name, ['controller' => 'Users', 'action' => 'view', $hotel->user->id]) : '' ?></li>
                    <li class="list-group-item"><?= __('Khu vực') ?>: <?= $hotel->has('region') ? $this->Html->link($hotel->region->name, ['controller' => 'Regions', 'action' => 'view', $hotel->region->id]) : '' ?></li>
                    <li class="list-group-item"><?= __('Loại địa điểm') ?>: <?= $hotel->has('typehotel') ? $this->Html->link($hotel->typehotel->name, ['controller' => 'Typelaces', 'action' => 'view', $hotel->typehotel->id]) : '' ?></li>
                    <li class="list-group-item"><?= __('Tên') ?>: <?= h($hotel->name) ?></li>
                    <li class="list-group-item"><?= __('Link rút gọn') ?>: <?= h($hotel->slug) ?></li>
                    <li class="list-group-item"><?= __('Hình ảnh') ?>: <?php
                                        if (!empty($hotel->image)) {
                                            echo $this->Html->image($hotel->image, ['class' => 'img-responsive', 'width' => 300]);
                                        }
                                        ?></li>
                    
                    <li class="list-group-item"><?= __('Nội dung') ?>: <?= h($hotel->descripton) ?></li>
                    <li class="list-group-item"><?= __('Số sao') ?>: <?= h($hotel->standard) ?></li>
                    <li class="list-group-item"><?= __('Giá trung bình') ?>: <?= h($hotel->price) ?></li>
                    <li class="list-group-item"><?= __('Địa chỉ') ?>: <?= h($hotel->address) ?></li>
                    <li class="list-group-item"><?= __('Giờ mở cửa') ?>: <?= h($hotel->open) ?></li>
                    <li class="list-group-item"><?= __('Giờ đóng cửa') ?>: <?= h($hotel->close) ?></li>
                    <li class="list-group-item"><?= __('Link website') ?>: <?= h($hotel->web) ?></li>
                    <li class="list-group-item"><?= __('Kinh độ') ?>: <?= h($hotel->longitude) ?></li>
                    <li class="list-group-item"><?= __('vĩ độ') ?>: <?= h($hotel->latitude) ?></li>
                    <li class="list-group-item"><?= __('Trạng thái') ?>: <?= h($hotel->status ? __('Yes') : __('No')) ?></li>
                    <li class="list-group-item"><?= __('Nổi bậc') ?>: <?= h($hotel->featured ? __('Yes') : __('No')) ?></li>
                    <li class="list-group-item"><?= __('Ngày tạo') ?>: <?= h($hotel->created) ?></li>
                    <li class="list-group-item"><?= __('Ngày cập nhật') ?>: <?= h($hotel->created) ?></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- panel body -->