<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> <?= __('Danh sách chỗ ở') ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">

        <div class="col-md-12">
            <p>
                <?= $this->Html->link('<i class="fa fa-plus"></i> Thêm mới', ['controller' => 'Hotels', 'action' => 'add'], ['escape' => false, 'class' => 'btn btn-primary']); ?>
            </p>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('region_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('typehotel_id') ?></th>
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
                        <?php foreach ($hotels as $hotel): ?>
                            <tr>
                                <td><?= $this->Number->format($hotel->id) ?></td>
                                <td><?= $hotel->has('user') ? $this->Html->link($hotel->user->name, ['controller' => 'Users', 'action' => 'view', $hotel->user->id]) : '' ?></td>
                                <td><?= $hotel->has('region') ? $this->Html->link($hotel->region->name, ['controller' => 'Regions', 'action' => 'view', $hotel->region->id]) : '' ?></td>
                                <td><?= $hotel->has('typehotel') ? $this->Html->link($hotel->typehotel->name, ['controller' => 'Typehotels', 'action' => 'view', $hotel->typehotel->id]) : '' ?></td>
                                <td><?= h($hotel->name) ?></td>
                                <td>
                                    <?php
                                    if (!empty($hotel->image)) {
                                        echo $this->Html->image($hotel->image, ['class' => 'img-responsive', 'width' => 1000]);
                                    }
                                    ?>
                                </td>
                                <td><?= h($hotel->price) ?></td>
                                <td><?= h($hotel->latitude) ?></td>
                                <td><?= h($hotel->longitude) ?></td>
                                <td><?= h($hotel->status ? __('Yes') : __('No')) ?></td>
                                <td><?= h($hotel->featured ? __('Yes') : __('No')) ?></td>
                                <td><?= h($hotel->created) ?></td>
                                <td><?= h($hotel->modified) ?></td>

                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $hotel->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hotel->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hotel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hotel->id)]) ?>
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