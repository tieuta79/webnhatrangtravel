<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> <?= __('Danh sách hình ảnh ') ?>
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
                            <th scope="col"><?= $this->Paginator->sort('review_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('featured') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($imagereviews as $imagereview): ?>
                            <tr>
                                <td><?= $this->Number->format($imagereview->id) ?></td>
                                <td><?= $imagereview->has('review') ? $this->Html->link($imagereview->review->name, ['controller' => 'Users', 'action' => 'view', $imagereview->review->id]) : '' ?></td>
                                <td><?= h($imagereview->name) ?></td>
                                <td>
                                    <?php
                                    if (!empty($imagereview->image)) {
                                        echo $this->Html->image($imagereview->image, ['class' => 'img-responsive', 'width' => 1000]);
                                    }
                                    ?>
                                </td>
                                <td class="text-center"><?= $imagereview->status == 1 ? '<i c_id="'.$imagereview->id.'" status="' . $imagereview->status . '" class="fa fa-check text-success"></i>' : '<i c_id="'.$imagereview->id.'" status="' . $imagereview->status . '" class="fa fa-times text-danger"></i>'; ?></td>
                                <td><?= h($imagereview->created) ?></td>
                                <td><?= h($imagereview->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $imagereview->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagereview->id)]) ?>
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