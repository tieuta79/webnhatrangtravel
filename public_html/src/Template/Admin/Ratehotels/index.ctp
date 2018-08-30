<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> <?= __('Danh sách đánh giá chỗ ở') ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row">
        <p>Bấm vào dấu check để thay đổi trạng thái.</p>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('hotel_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('point') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('featured') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($ratehotels as $ratehotel): ?>
                            <tr>
                                <td><?= $this->Number->format($ratehotel->id) ?></td>
                                <td><?= $ratehotel->has('user') ? $this->Html->link($ratehotel->user->name, ['controller' => 'Users', 'action' => 'view', $ratehotel->user->id]) : '' ?></td>
                                <td><?= $ratehotel->has('hotel') ? $this->Html->link($ratehotel->hotel->name, ['controller' => 'Events', 'action' => 'view', $ratehotel->hotel->id]) : '' ?></td>
                                <td><?= h($ratehotel->name) ?></td>
                                <td><?= h($ratehotel->point) ?></td>
                                <td><?= h($ratehotel->description) ?></td>
                                <td class="text-center"><?= $ratehotel->status == 1 ? '<i c_id="'.$ratehotel->id.'" status="' . $ratehotel->status . '" class="fa fa-check text-success"></i>' : '<i c_id="'.$ratehotel->id.'" status="' . $ratehotel->status . '" class="fa fa-times text-danger"></i>'; ?></td>
                                <td><?= h($ratehotel->created) ?></td>
                                <td><?= h($ratehotel->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ratehotel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ratehotel->id)]) ?>
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