<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> Chi tiết <?= h($slide->name) ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                    <li class="list-group-item"><?= __('Tên') ?>: <?= h($slide->name) ?></li>
                    <li class="list-group-item"><?= __('Link rút gọn') ?>: <?= h($slide->slug) ?></li>
                    <li class="list-group-item"><?= __('Hình ảnh') ?>: <?php
                                        if (!empty($slide->image)) {
                                            echo $this->Html->image('/uploads/slides/' . $slide->image, ['class' => 'img-responsive', 'width' => 300]);
                                        }
                                        ?></li>
                    
                    <li class="list-group-item"><?= __('Trạng thái') ?>: <?= h($slide->status ? __('Yes') : __('No')) ?></li>
                    <li class="list-group-item"><?= __('Nổi bậc') ?>: <?= h($slide->featured ? __('Yes') : __('No')) ?></li>
                    <li class="list-group-item"><?= __('Ngày tạo') ?>: <?= h($slide->created) ?></li>
                    <li class="list-group-item"><?= __('Ngày cập nhật') ?>: <?= h($slide->created) ?></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- panel body -->