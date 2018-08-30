<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Likehotel[]|\Cake\Collection\CollectionInterface $likehotels
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Likehotel'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="likehotels index large-9 medium-8 columns content">
    <h3><?= __('Likehotels') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hotel_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($likehotels as $likehotel): ?>
            <tr>
                <td><?= $this->Number->format($likehotel->id) ?></td>
                <td><?= $likehotel->has('user') ? $this->Html->link($likehotel->user->name, ['controller' => 'Users', 'action' => 'view', $likehotel->user->id]) : '' ?></td>
                <td><?= $likehotel->has('hotel') ? $this->Html->link($likehotel->hotel->name, ['controller' => 'Hotels', 'action' => 'view', $likehotel->hotel->id]) : '' ?></td>
                <td><?= h($likehotel->created) ?></td>
                <td><?= h($likehotel->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $likehotel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $likehotel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $likehotel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $likehotel->id)]) ?>
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
