<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> <?= __('Danh sách phương tiện') ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">

        <div class="col-md-12">
            <p>
                <?= $this->Html->link('<i class="fa fa-plus"></i> Thêm mới', ['controller' => 'Vehicles', 'action' => 'add'], ['escape' => false, 'class' => 'btn btn-primary']); ?>
            </p>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('region_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('typevehicle_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('feature') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($vehicles as $vehicle): ?>
                            <tr>
                                <td><?= $this->Number->format($vehicle->id) ?></td>
                                <td><?= $vehicle->has('user') ? $this->Html->link($vehicle->user->name, ['controller' => 'Users', 'action' => 'view', $vehicle->user->id]) : '' ?></td>
                                <td><?= $vehicle->has('region') ? $this->Html->link($vehicle->region->name, ['controller' => 'Regions', 'action' => 'view', $vehicle->region->id]) : '' ?></td>
                                <td><?= $vehicle->has('typevehicle') ? $this->Html->link($vehicle->typevehicle->name, ['controller' => 'Typevehicles', 'action' => 'view', $vehicle->typevehicle->id]) : '' ?></td>
                                <td><?= h($vehicle->name) ?></td>
                                <td>
                                    <?php
                                    if (!empty($vehicle->image)) {
                                        echo $this->Html->image($vehicle->image, ['class' => 'img-responsive', 'width' => 1000]);
                                    }
                                    ?>
                                </td>
                                <td><?= h($vehicle->price) ?></td>
                                <td><?= h($vehicle->status ? __('Yes') : __('No')) ?></td>
                                <td><?= h($vehicle->featured ? __('Yes') : __('No')) ?></td>
                                <td><?= h($vehicle->created) ?></td>
                                <td><?= h($vehicle->modified) ?></td>

                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $vehicle->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vehicle->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vehicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicle->id)]) ?>
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