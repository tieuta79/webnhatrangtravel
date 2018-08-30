<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> <?= __('Danh sách hình ảnh địa điểm') ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">

        <div class="col-md-12">
            <p>
                <?= $this->Html->link('<i class="fa fa-plus"></i> Thêm mới', ['controller' => 'Imageplaces', 'action' => 'add'], ['escape' => false, 'class' => 'btn btn-primary']); ?>
            </p>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('place_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('feature') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($imageplaces as $imageplace): ?>
                            <tr>
                                <td><?= $this->Number->format($imageplace->id) ?></td>
                                <td><?= $imageplace->has('place') ? $this->Html->link($imageplace->place->name, ['controller' => 'Places', 'action' => 'view', $imageplace->place->id]) : '' ?></td>
                                <td><?= h($imageplace->name) ?></td>
                                <td>
                                    <?php
                                    if (!empty($imageplace->image)) {
                                        echo $this->Html->image('/uploads/places/' . $imageplace->image, ['class' => 'img-responsive', 'width' => 100]);
                                    }
                                    ?>
                                </td>
                                <td><?= h($imageplace->status ? __('Yes') : __('No')) ?></td>
                                <td><?= h($imageplace->featured ? __('Yes') : __('No')) ?></td>
                                <td><?= h($imageplace->created) ?></td>
                                <td><?= h($imageplace->modified) ?></td>

                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $imageplace->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $imageplace->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $imageplace->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imageplace->id)]) ?>
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