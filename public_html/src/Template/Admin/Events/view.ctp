<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> Chi tiết <?= h($event->name) ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                    <li class="list-group-item"><?= __('Tài khoản') ?>: <?= $event->has('user') ? $this->Html->link($event->user->name, ['controller' => 'Users', 'action' => 'view', $event->user->id]) : '' ?></li>
                    <li class="list-group-item"><?= __('Tiêu đề') ?>: <?= h($event->title) ?></li>
                    <li class="list-group-item"><?= __('Link rút gọn') ?>: <?= h($event->slug) ?></li>
                    <li class="list-group-item"><?= __('Hình ảnh') ?>: <?php
                                        if (!empty($event->image)) {
                                            echo $this->Html->image($event->image, ['class' => 'img-responsive', 'width' => 300]);
                                        }
                                        ?></li>
                    
                    <li class="list-group-item"><?= __('Nội dung') ?>: <?= h($event->content) ?></li>
                    <li class="list-group-item"><?= __('Thời gian bắt đầu') ?>: <?= h($event->start) ?></li>
                    <li class="list-group-item"><?= __('Thời gian kết thúc') ?>: <?= h($event->end) ?></li>
                    <li class="list-group-item"><?= __('Trạng thái') ?>: <?= h($event->status ? __('Yes') : __('No')) ?></li>
                    <li class="list-group-item"><?= __('Nổi bậc') ?>: <?= h($event->featured ? __('Yes') : __('No')) ?></li>
                    <li class="list-group-item"><?= __('Ngày tạo') ?>: <?= h($event->created) ?></li>
                    <li class="list-group-item"><?= __('Ngày cập nhật') ?>: <?= h($event->created) ?></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- panel body -->