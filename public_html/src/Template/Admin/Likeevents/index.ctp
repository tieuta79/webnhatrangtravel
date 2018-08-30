<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Likeevent[]|\Cake\Collection\CollectionInterface $likeevents
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Likeevent'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="likeevents index large-9 medium-8 columns content">
    <h3><?= __('Likeevents') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('event_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($likeevents as $likeevent): ?>
            <tr>
                <td><?= $this->Number->format($likeevent->id) ?></td>
                <td><?= $likeevent->has('user') ? $this->Html->link($likeevent->user->name, ['controller' => 'Users', 'action' => 'view', $likeevent->user->id]) : '' ?></td>
                <td><?= $likeevent->has('event') ? $this->Html->link($likeevent->event->title, ['controller' => 'Events', 'action' => 'view', $likeevent->event->id]) : '' ?></td>
                <td><?= h($likeevent->created) ?></td>
                <td><?= h($likeevent->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $likeevent->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $likeevent->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $likeevent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $likeevent->id)]) ?>
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
