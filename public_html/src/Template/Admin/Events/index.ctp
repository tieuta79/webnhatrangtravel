<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> <?= __('Danh sách sự kiện') ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">

        <div class="col-md-12">
            <p>
                <?= $this->Html->link('<i class="fa fa-plus"></i> Thêm mới', ['controller' => 'Events', 'action' => 'add'], ['escape' => false, 'class' => 'btn btn-primary']); ?>
            </p>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('slug') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('content') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('start') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('end') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('feature') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($events as $event): ?>
                            <tr>
                                <td><?= $this->Number->format($event->id) ?></td>
                                <td><?= $event->has('user') ? $this->Html->link($event->user->name, ['controller' => 'Users', 'action' => 'view', $event->user->id]) : '' ?></td>
                                <td><?= h($event->title) ?></td>
                                <td><?= h($event->slug) ?></td>
                                <td>
                                    <?php
                                    if (!empty($event->image)) {
                                        echo $this->Html->image($event->image, ['class' => 'img-responsive', 'width' => 1000]);
                                    }
                                    ?>
                                </td>
                                <td><?= h($event->content) ?></td>
                                <td><?= h($event->start) ?></td>
                                <td><?= h($event->end) ?></td>
                                <td><?= h($event->status ? __('Yes') : __('No')) ?></td>
                                <td><?= h($event->featured ? __('Yes') : __('No')) ?></td>
                                <td><?= h($event->created) ?></td>
                                <td><?= h($event->modified) ?></td>

                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $event->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $event->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>                        
                    </tbody>
                </table>
            </div>
            <div class="row content-row-pagination">
                <div class="col-md-12">
                    <ul class="pagination">
                        <?= $this->Paginator->first('<< ' . __('first')) ?>
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>     
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                        <?= $this->Paginator->last(__('last') . ' >>') ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!-- panel body -->