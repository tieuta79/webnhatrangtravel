<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> Chi tiết <?= h($imagerestaurant->name) ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                    <li class="list-group-item"><?= __('Ăn uống') ?>: <?= $imagerestaurant->has('restaurant') ? $this->Html->link($imagerestaurant->restaurant->name, ['controller' => 'Restaurants', 'action' => 'view', $imagerestaurant->restaurant->id]) : '' ?></li>
                    <li class="list-group-item"><?= __('Hình ảnh') ?>: <?php
                                        if (!empty($imagerestaurant->image)) {
                                            echo $this->Html->image('/uploads/restaurants/' . $imagerestaurant->image, ['class' => 'img-responsive', 'width' => 300]);
                                        }
                                        ?></li>
                    
                    <li class="list-group-item"><?= __('Tên') ?>: <?= h($imagerestaurant->name) ?></li>
                    <li class="list-group-item"><?= __('Trạng thái') ?>: <?= h($imagerestaurant->status ? __('Yes') : __('No')) ?></li>
                    <li class="list-group-item"><?= __('Nổi bậc') ?>: <?= h($imagerestaurant->featured ? __('Yes') : __('No')) ?></li>
                    <li class="list-group-item"><?= __('Ngày tạo') ?>: <?= h($imagerestaurant->created) ?></li>
                    <li class="list-group-item"><?= __('Ngày cập nhật') ?>: <?= h($imagerestaurant->created) ?></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- panel body -->