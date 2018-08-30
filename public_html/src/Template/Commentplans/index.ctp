<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Commentplan[]|\Cake\Collection\CollectionInterface $commentplans
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Commentplan'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Plans'), ['controller' => 'Plans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Plan'), ['controller' => 'Plans', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="commentplans index large-9 medium-8 columns content">
    <h3><?= __('Commentplans') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('plan_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('featured') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($commentplans as $commentplan): ?>
            <tr>
                <td><?= $this->Number->format($commentplan->id) ?></td>
                <td><?= $commentplan->has('user') ? $this->Html->link($commentplan->user->name, ['controller' => 'Users', 'action' => 'view', $commentplan->user->id]) : '' ?></td>
                <td><?= $commentplan->has('plan') ? $this->Html->link($commentplan->plan->name, ['controller' => 'Plans', 'action' => 'view', $commentplan->plan->id]) : '' ?></td>
                <td><?= h($commentplan->status) ?></td>
                <td><?= h($commentplan->featured) ?></td>
                <td><?= h($commentplan->created) ?></td>
                <td><?= h($commentplan->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $commentplan->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $commentplan->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $commentplan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commentplan->id)]) ?>
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
