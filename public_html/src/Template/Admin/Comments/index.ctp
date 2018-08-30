<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> <?= __('Danh sách bình luận bài review') ?>
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
                            <th scope="col"><?= $this->Paginator->sort('review_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('content') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('featured') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($comments as $comment): ?>
                            <tr>
                                <td><?= $this->Number->format($comment->id) ?></td>
                                <td><?= $comment->has('user') ? $this->Html->link($comment->user->name, ['controller' => 'Users', 'action' => 'view', $comment->user->id]) : '' ?></td>
                                <td><?= $comment->has('review') ? $this->Html->link($comment->review->name, ['controller' => 'Events', 'action' => 'view', $comment->review->id]) : '' ?></td>
                                
                                <td><?= h($comment->content) ?></td>
                                <td class="text-center"><?= $comment->status == 1 ? '<i c_id="'.$comment->id.'" status="' . $comment->status . '" class="fa fa-check text-success"></i>' : '<i c_id="'.$comment->id.'" status="' . $comment->status . '" class="fa fa-times text-danger"></i>'; ?></td>
                                <td><?= h($comment->created) ?></td>
                                <td><?= h($comment->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $comment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->id)]) ?>
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