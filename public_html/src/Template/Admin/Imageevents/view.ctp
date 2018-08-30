<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> Chi tiết <?= h($imageevent->name) ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                    <li class="list-group-item"><?= __('Sự kiện') ?>: <?= $imageevent->has('event') ? $this->Html->link($imageevent->event->title, ['controller' => 'Events', 'action' => 'view', $imageevent->event->id]) : '' ?></li>
                    <li class="list-group-item"><?= __('Hình ảnh') ?>: <?php
                                        if (!empty($imageevent->image)) {
                                            echo $this->Html->image('/uploads/events/' . $imageevent->image, ['class' => 'img-responsive', 'width' => 300]);
                                        }
                                        ?></li>
                    
                    <li class="list-group-item"><?= __('Tên') ?>: <?= h($imageevent->name) ?></li>
                    <li class="list-group-item"><?= __('Trạng thái') ?>: <?= h($imageevent->status ? __('Yes') : __('No')) ?></li>
                    <li class="list-group-item"><?= __('Nổi bậc') ?>: <?= h($imageevent->featured ? __('Yes') : __('No')) ?></li>
                    <li class="list-group-item"><?= __('Ngày tạo') ?>: <?= h($imageevent->created) ?></li>
                    <li class="list-group-item"><?= __('Ngày cập nhật') ?>: <?= h($imageevent->created) ?></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- panel body -->