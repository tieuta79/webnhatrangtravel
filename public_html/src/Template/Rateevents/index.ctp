<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Rateevent[]|\Cake\Collection\CollectionInterface $rateevents
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Rateevent'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rateevents index large-9 medium-8 columns content">
    <h3><?= __('Rateevents') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('event_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('point') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('featured') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rateevents as $rateevent): ?>
            <tr>
                <td><?= $this->Number->format($rateevent->id) ?></td>
                <td><?= $rateevent->has('user') ? $this->Html->link($rateevent->user->name, ['controller' => 'Users', 'action' => 'view', $rateevent->user->id]) : '' ?></td>
                <td><?= $rateevent->has('event') ? $this->Html->link($rateevent->event->title, ['controller' => 'Events', 'action' => 'view', $rateevent->event->id]) : '' ?></td>
                <td><?= $this->Number->format($rateevent->point) ?></td>
                <td><?= h($rateevent->status) ?></td>
                <td><?= h($rateevent->featured) ?></td>
                <td><?= h($rateevent->created) ?></td>
                <td><?= h($rateevent->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $rateevent->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rateevent->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rateevent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rateevent->id)]) ?>
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
