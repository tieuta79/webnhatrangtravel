<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Likereview[]|\Cake\Collection\CollectionInterface $likereviews
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Likereview'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reviews'), ['controller' => 'Reviews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Review'), ['controller' => 'Reviews', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="likereviews index large-9 medium-8 columns content">
    <h3><?= __('Likereviews') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('review_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($likereviews as $likereview): ?>
            <tr>
                <td><?= $this->Number->format($likereview->id) ?></td>
                <td><?= $likereview->has('user') ? $this->Html->link($likereview->user->name, ['controller' => 'Users', 'action' => 'view', $likereview->user->id]) : '' ?></td>
                <td><?= $likereview->has('review') ? $this->Html->link($likereview->review->name, ['controller' => 'Reviews', 'action' => 'view', $likereview->review->id]) : '' ?></td>
                <td><?= h($likereview->created) ?></td>
                <td><?= h($likereview->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $likereview->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $likereview->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $likereview->id], ['confirm' => __('Are you sure you want to delete # {0}?', $likereview->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
