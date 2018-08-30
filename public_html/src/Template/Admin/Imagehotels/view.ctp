<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> Chi tiết <?= h($imagehotel->name) ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                    <li class="list-group-item"><?= __('Chỗ ở') ?>: <?= $imagehotel->has('hotel') ? $this->Html->link($imagehotel->event->name, ['controller' => 'Hotels', 'action' => 'view', $imagehotel->hotel->id]) : '' ?></li>
                    <li class="list-group-item"><?= __('Hình ảnh') ?>: <?php
                                        if (!empty($imagehotel->image)) {
                                            echo $this->Html->image('/uploads/hotels/' . $imagehotel->image, ['class' => 'img-responsive', 'width' => 300]);
                                        }
                                        ?></li>
                    
                    <li class="list-group-item"><?= __('Tên') ?>: <?= h($imagehotel->name) ?></li>
                    <li class="list-group-item"><?= __('Trạng thái') ?>: <?= h($imagehotel->status ? __('Yes') : __('No')) ?></li>
                    <li class="list-group-item"><?= __('Nổi bậc') ?>: <?= h($imagehotel->featured ? __('Yes') : __('No')) ?></li>
                    <li class="list-group-item"><?= __('Ngày tạo') ?>: <?= h($imagehotel->created) ?></li>
                    <li class="list-group-item"><?= __('Ngày cập nhật') ?>: <?= h($imagehotel->created) ?></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- panel body -->