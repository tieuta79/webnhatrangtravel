<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> Chi tiết <?= h($imagetour->name) ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                    <li class="list-group-item"><?= __('Tour') ?>: <?= $imagetour->has('event') ? $this->Html->link($imagetour->tour->name, ['controller' => 'Tours', 'action' => 'view', $imagetour->tour->id]) : '' ?></li>
                    <li class="list-group-item"><?= __('Hình ảnh') ?>: <?php
                                        if (!empty($imagetour->image)) {
                                            echo $this->Html->image('/uploads/tours/' . $imagetour->image, ['class' => 'img-responsive', 'width' => 300]);
                                        }
                                        ?></li>
                    
                    <li class="list-group-item"><?= __('Tên') ?>: <?= h($imagetour->name) ?></li>
                    <li class="list-group-item"><?= __('Trạng thái') ?>: <?= h($imagetour->status ? __('Yes') : __('No')) ?></li>
                    <li class="list-group-item"><?= __('Nổi bậc') ?>: <?= h($imagetour->featured ? __('Yes') : __('No')) ?></li>
                    <li class="list-group-item"><?= __('Ngày tạo') ?>: <?= h($imagetour->created) ?></li>
                    <li class="list-group-item"><?= __('Ngày cập nhật') ?>: <?= h($imagetour->created) ?></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- panel body -->