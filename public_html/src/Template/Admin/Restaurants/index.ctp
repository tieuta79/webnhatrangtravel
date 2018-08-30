<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> <?= __('Danh sách địa điểm ăn uống') ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">

        <div class="col-md-12">
            <p>
                <?= $this->Html->link('<i class="fa fa-plus"></i> Thêm mới', ['controller' => 'Restaurants', 'action' => 'add'], ['escape' => false, 'class' => 'btn btn-primary']); ?>
            </p>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('region_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('typerestaurant_id') ?></th>
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
                        <?php foreach ($restaurants as $restaurant): ?>
                            <tr>
                                <td><?= $this->Number->format($restaurant->id) ?></td>
                                <td><?= $restaurant->has('user') ? $this->Html->link($restaurant->user->name, ['controller' => 'Users', 'action' => 'view', $restaurant->user->id]) : '' ?></td>
                                <td><?= $restaurant->has('region') ? $this->Html->link($restaurant->region->name, ['controller' => 'Regions', 'action' => 'view', $restaurant->region->id]) : '' ?></td>
                                <td><?= $restaurant->has('typerestaurant') ? $this->Html->link($restaurant->typerestaurant->name, ['controller' => 'Typerestaurants', 'action' => 'view', $restaurant->typerestaurant->id]) : '' ?></td>
                                <td><?= h($restaurant->name) ?></td>
                                <td>
                                    <?php
                                    if (!empty($restaurant->image)) {
                                        echo $this->Html->image($restaurant->image, ['class' => 'img-responsive', 'width' => 1000]);
                                    }
                                    ?>
                                </td>
                                <td><?= h($restaurant->price) ?></td>
                                <td><?= h($restaurant->latitude) ?></td>
                                <td><?= h($restaurant->longitude) ?></td>
                                <td><?= h($restaurant->status ? __('Yes') : __('No')) ?></td>
                                <td><?= h($restaurant->featured ? __('Yes') : __('No')) ?></td>
                                <td><?= h($restaurant->created) ?></td>
                                <td><?= h($restaurant->modified) ?></td>

                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $restaurant->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $restaurant->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $restaurant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $restaurant->id)]) ?>
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