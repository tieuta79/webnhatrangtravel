<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> Chi tiết <?= h($imagevehicle->name) ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                    <li class="list-group-item"><?= __('Phương tiện') ?>: <?= $imagevehicle->has('vehicle') ? $this->Html->link($imagevehicle->vehicle->name, ['controller' => 'Vehicle', 'action' => 'view', $imagevehicle->vehicle->id]) : '' ?></li>
                    <li class="list-group-item"><?= __('Hình ảnh') ?>: <?php
                                        if (!empty($imagevehicle->image)) {
                                            echo $this->Html->image('/uploads/vehicles/' . $imagevehicle->image, ['class' => 'img-responsive', 'width' => 300]);
                                        }
                                        ?></li>
                    
                    <li class="list-group-item"><?= __('Tên') ?>: <?= h($imagevehicle->name) ?></li>
                    <li class="list-group-item"><?= __('Trạng thái') ?>: <?= h($imagevehicle->status ? __('Yes') : __('No')) ?></li>
                    <li class="list-group-item"><?= __('Nổi bậc') ?>: <?= h($imagevehicle->featured ? __('Yes') : __('No')) ?></li>
                    <li class="list-group-item"><?= __('Ngày tạo') ?>: <?= h($imagevehicle->created) ?></li>
                    <li class="list-group-item"><?= __('Ngày cập nhật') ?>: <?= h($imagevehicle->created) ?></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- panel body -->