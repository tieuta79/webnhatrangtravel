<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ratevehicle[]|\Cake\Collection\CollectionInterface $ratevehicles
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ratevehicle'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ratevehicles index large-9 medium-8 columns content">
    <h3><?= __('Ratevehicles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vehicle_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('point') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('featured') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ratevehicles as $ratevehicle): ?>
            <tr>
                <td><?= $this->Number->format($ratevehicle->id) ?></td>
                <td><?= $ratevehicle->has('user') ? $this->Html->link($ratevehicle->user->name, ['controller' => 'Users', 'action' => 'view', $ratevehicle->user->id]) : '' ?></td>
                <td><?= $ratevehicle->has('vehicle') ? $this->Html->link($ratevehicle->vehicle->name, ['controller' => 'Vehicles', 'action' => 'view', $ratevehicle->vehicle->id]) : '' ?></td>
                <td><?= $this->Number->format($ratevehicle->point) ?></td>
                <td><?= h($ratevehicle->status) ?></td>
                <td><?= h($ratevehicle->featured) ?></td>
                <td><?= h($ratevehicle->created) ?></td>
                <td><?= h($ratevehicle->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ratevehicle->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ratevehicle->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ratevehicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ratevehicle->id)]) ?>
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
