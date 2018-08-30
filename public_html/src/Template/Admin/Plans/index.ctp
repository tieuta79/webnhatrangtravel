<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> <?= __('Danh sách đánh giá sự kiện') ?>
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
                            <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('start') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('end') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('featured') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($plans as $plan): ?>
                            <tr>
                                <td><?= $this->Number->format($plan->id) ?></td>
                                <td><?= $plan->has('user') ? $this->Html->link($plan->user->name, ['controller' => 'Users', 'action' => 'view', $plan->user->id]) : '' ?></td>
                                <td><?= h($plan->name) ?></td>
                                <td>
                                    <?php
                                    if (!empty($plan->image)) {
                                        echo $this->Html->image($plan->image, ['class' => 'img-responsive', 'width' => 1000]);
                                    }
                                    ?>
                                </td>
                                <td><?= h($plan->start) ?></td>
                                <td><?= h($plan->end) ?></td>
                                <td class="text-center"><?= $plan->status == 1 ? '<i c_id="'.$plan->id.'" status="' . $plan->status . '" class="fa fa-check text-success"></i>' : '<i c_id="'.$plan->id.'" status="' . $plan->status . '" class="fa fa-times text-danger"></i>'; ?></td>
                                <td><?= h($plan->created) ?></td>
                                <td><?= h($plan->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $plan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $plan->id)]) ?>
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