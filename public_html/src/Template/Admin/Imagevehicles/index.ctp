<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> <?= __('Danh sách hình ảnh phương tiện') ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">

        <div class="col-md-12">
            <p>
                <?= $this->Html->link('<i class="fa fa-plus"></i> Thêm mới', ['controller' => 'Imagevehicles', 'action' => 'add'], ['escape' => false, 'class' => 'btn btn-primary']); ?>
            </p>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('vehicle_id') ?></th>
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
                        <?php foreach ($imagevehicles as $imagevehicle): ?>
                            <tr>
                                <td><?= $this->Number->format($imagevehicle->id) ?></td>
                                <td><?= $imagevehicle->has('vehicle') ? $this->Html->link($imagevehicle->vehicle->name, ['controller' => 'Vehicles', 'action' => 'view', $imagevehicle->vehicle->id]) : '' ?></td>
                                <td><?= h($imagevehicle->name) ?></td>
                                <td>
                                    <?php
                                    if (!empty($imagevehicle->image)) {
                                        echo $this->Html->image('/uploads/vehicles/' . $imagevehicle->image, ['class' => 'img-responsive', 'width' => 100]);
                                    }
                                    ?>
                                </td>
                                <td><?= h($imagevehicle->status ? __('Yes') : __('No')) ?></td>
                                <td><?= h($imagevehicle->featured ? __('Yes') : __('No')) ?></td>
                                <td><?= h($imagevehicle->created) ?></td>
                                <td><?= h($imagevehicle->modified) ?></td>

                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $imagevehicle->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $imagevehicle->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $imagevehicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagevehicle->id)]) ?>
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