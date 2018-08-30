<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Imagevehicle[]|\Cake\Collection\CollectionInterface $imagevehicles
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Imagevehicle'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imagevehicles index large-9 medium-8 columns content">
    <h3><?= __('Imagevehicles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vehicle_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('featured') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($imagevehicles as $imagevehicle): ?>
            <tr>
                <td><?= $this->Number->format($imagevehicle->id) ?></td>
                <td><?= $imagevehicle->has('vehicle') ? $this->Html->link($imagevehicle->vehicle->name, ['controller' => 'Vehicles', 'action' => 'view', $imagevehicle->vehicle->id]) : '' ?></td>
                <td><?= h($imagevehicle->image) ?></td>
                <td><?= h($imagevehicle->status) ?></td>
                <td><?= h($imagevehicle->featured) ?></td>
                <td><?= h($imagevehicle->created) ?></td>
                <td><?= h($imagevehicle->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $imagevehicle->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $imagevehicle->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $imagevehicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagevehicle->id)]) ?>
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
