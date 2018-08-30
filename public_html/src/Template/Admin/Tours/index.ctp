<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> <?= __('Danh sách tours') ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">

        <div class="col-md-12">
            <p>
                <?= $this->Html->link('<i class="fa fa-plus"></i> Thêm mới', ['controller' => 'Tours', 'action' => 'add'], ['escape' => false, 'class' => 'btn btn-primary']); ?>
            </p>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('region_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('typetour_id') ?></th>
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
                        <?php foreach ($tours as $tour): ?>
                            <tr>
                                <td><?= $this->Number->format($tour->id) ?></td>
                                <td><?= $tour->has('user') ? $this->Html->link($tour->user->name, ['controller' => 'Users', 'action' => 'view', $tour->user->id]) : '' ?></td>
                                <td><?= $tour->has('region') ? $this->Html->link($tour->region->name, ['controller' => 'Regions', 'action' => 'view', $tour->region->id]) : '' ?></td>
                                <td><?= $tour->has('typetour') ? $this->Html->link($tour->typetour->name, ['controller' => 'Typetours', 'action' => 'view', $tour->typetour->id]) : '' ?></td>
                                <td><?= h($tour->name) ?></td>
                                <td>
                                    <?php
                                    if (!empty($tour->image)) {
                                        echo $this->Html->image($tour->image, ['class' => 'img-responsive', 'width' => 1000]);
                                    }
                                    ?>
                                </td>
                                <td><?= h($tour->price) ?></td>
                                <td><?= h($tour->status ? __('Yes') : __('No')) ?></td>
                                <td><?= h($tour->featured ? __('Yes') : __('No')) ?></td>
                                <td><?= h($tour->created) ?></td>
                                <td><?= h($tour->modified) ?></td>

                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $tour->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tour->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tour->id)]) ?>
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