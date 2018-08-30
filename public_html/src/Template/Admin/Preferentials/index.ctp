<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Preferential[]|\Cake\Collection\CollectionInterface $preferentials
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Preferential'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="preferentials index large-9 medium-8 columns content">
    <h3><?= __('Preferentials') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('room_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($preferentials as $preferential): ?>
            <tr>
                <td><?= $this->Number->format($preferential->id) ?></td>
                <td><?= $preferential->has('room') ? $this->Html->link($preferential->room->name, ['controller' => 'Rooms', 'action' => 'view', $preferential->room->id]) : '' ?></td>
                <td><?= h($preferential->created) ?></td>
                <td><?= h($preferential->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $preferential->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $preferential->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $preferential->id], ['confirm' => __('Are you sure you want to delete # {0}?', $preferential->id)]) ?>
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
