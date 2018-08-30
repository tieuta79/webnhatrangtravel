<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> <?= __('Danh sách đánh giá địa điểm vui chơi') ?>
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
                            <th scope="col"><?= $this->Paginator->sort('place_id') ?></th>
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
                        <?php foreach ($rateplaces as $rateplace): ?>
                            <tr>
                                <td><?= $this->Number->format($rateplace->id) ?></td>
                                <td><?= $rateplace->has('user') ? $this->Html->link($rateplace->user->name, ['controller' => 'Users', 'action' => 'view', $rateplace->user->id]) : '' ?></td>
                                <td><?= $rateplace->has('place') ? $this->Html->link($rateplace->place->name, ['controller' => 'Events', 'action' => 'view', $rateplace->place->id]) : '' ?></td>
                                <td><?= h($rateplace->name) ?></td>
                                <td><?= h($rateplace->point) ?></td>
                                <td><?= h($rateplace->description) ?></td>
                                <td class="text-center"><?= $rateplace->status == 1 ? '<i c_id="'.$rateplace->id.'" status="' . $rateplace->status . '" class="fa fa-check text-success"></i>' : '<i c_id="'.$rateplace->id.'" status="' . $rateplace->status . '" class="fa fa-times text-danger"></i>'; ?></td>
                                <td><?= h($rateplace->created) ?></td>
                                <td><?= h($rateplace->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rateplace->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rateplace->id)]) ?>
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