<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> <?= __('Danh sách đánh giá phương tiện') ?>
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
                            <th scope="col"><?= $this->Paginator->sort('vehicle_id') ?></th>
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
                        <?php foreach ($ratevehicles as $ratevehicle): ?>
                            <tr>
                                <td><?= $this->Number->format($ratevehicle->id) ?></td>
                                <td><?= $ratevehicle->has('user') ? $this->Html->link($ratevehicle->user->name, ['controller' => 'Users', 'action' => 'view', $ratevehicle->user->id]) : '' ?></td>
                                <td><?= $ratevehicle->has('vehicle') ? $this->Html->link($ratevehicle->vehicle->name, ['controller' => 'Events', 'action' => 'view', $ratevehicle->vehicle->id]) : '' ?></td>
                                <td><?= h($ratevehicle->name) ?></td>
                                <td><?= h($ratevehicle->point) ?></td>
                                <td><?= h($ratevehicle->description) ?></td>
                                <td class="text-center"><?= $ratevehicle->status == 1 ? '<i c_id="'.$ratevehicle->id.'" status="' . $ratevehicle->status . '" class="fa fa-check text-success"></i>' : '<i c_id="'.$ratevehicle->id.'" status="' . $ratevehicle->status . '" class="fa fa-times text-danger"></i>'; ?></td>
                                <td><?= h($ratevehicle->created) ?></td>
                                <td><?= h($ratevehicle->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ratevehicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ratevehicle->id)]) ?>
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