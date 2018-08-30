<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> <?= __('Danh sách địa điểm vui chơi') ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">

        <div class="col-md-12">
            <p>
                <?= $this->Html->link('<i class="fa fa-plus"></i> Thêm mới', ['controller' => 'Places', 'action' => 'add'], ['escape' => false, 'class' => 'btn btn-primary']); ?>
            </p>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('region_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('typeplace_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('latitude') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('longitude') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('feature') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($places as $place): ?>
                            <tr>
                                <td><?= $this->Number->format($place->id) ?></td>
                                <td><?= $place->has('user') ? $this->Html->link($place->user->name, ['controller' => 'Users', 'action' => 'view', $place->user->id]) : '' ?></td>
                                <td><?= $place->has('region') ? $this->Html->link($place->region->name, ['controller' => 'Regions', 'action' => 'view', $place->region->id]) : '' ?></td>
                                <td><?= $place->has('typeplace') ? $this->Html->link($place->typeplace->name, ['controller' => 'Typeplaces', 'action' => 'view', $place->typeplace->id]) : '' ?></td>
                                <td><?= h($place->name) ?></td>
                                <td>
                                    <?php
                                    if (!empty($place->image)) {
                                        echo $this->Html->image($place->image, ['class' => 'img-responsive', 'width' => 1000]);
                                    }
                                    ?>
                                </td>
                                <td><?= h($place->price) ?></td>
                                <td><?= h($place->latitude) ?></td>
                                <td><?= h($place->longitude) ?></td>
                                <td><?= h($place->status ? __('Yes') : __('No')) ?></td>
                                <td><?= h($place->featured ? __('Yes') : __('No')) ?></td>
                                <td><?= h($place->created) ?></td>
                                <td><?= h($place->modified) ?></td>

                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $place->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $place->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $place->id], ['confirm' => __('Are you sure you want to delete # {0}?', $place->id)]) ?>
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