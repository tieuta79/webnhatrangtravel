<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\DiscountsFood[]|\Cake\Collection\CollectionInterface $discountsFoods
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Discounts Food'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Foods'), ['controller' => 'Foods', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food'), ['controller' => 'Foods', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Discounts'), ['controller' => 'Discounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Discount'), ['controller' => 'Discounts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="discountsFoods index large-9 medium-8 columns content">
    <h3><?= __('Discounts Foods') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('food_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discounts_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($discountsFoods as $discountsFood): ?>
            <tr>
                <td><?= $this->Number->format($discountsFood->id) ?></td>
                <td><?= $discountsFood->has('food') ? $this->Html->link($discountsFood->food->name, ['controller' => 'Foods', 'action' => 'view', $discountsFood->food->id]) : '' ?></td>
                <td><?= $discountsFood->has('discount') ? $this->Html->link($discountsFood->discount->name, ['controller' => 'Discounts', 'action' => 'view', $discountsFood->discount->id]) : '' ?></td>
                <td><?= h($discountsFood->created) ?></td>
                <td><?= h($discountsFood->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $discountsFood->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $discountsFood->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $discountsFood->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discountsFood->id)]) ?>
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
