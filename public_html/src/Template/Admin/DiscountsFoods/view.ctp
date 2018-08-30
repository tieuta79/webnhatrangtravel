<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\DiscountsFood $discountsFood
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Discounts Food'), ['action' => 'edit', $discountsFood->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Discounts Food'), ['action' => 'delete', $discountsFood->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discountsFood->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Discounts Foods'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Discounts Food'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Foods'), ['controller' => 'Foods', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Food'), ['controller' => 'Foods', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Discounts'), ['controller' => 'Discounts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Discount'), ['controller' => 'Discounts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="discountsFoods view large-9 medium-8 columns content">
    <h3><?= h($discountsFood->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Food') ?></th>
            <td><?= $discountsFood->has('food') ? $this->Html->link($discountsFood->food->name, ['controller' => 'Foods', 'action' => 'view', $discountsFood->food->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discount') ?></th>
            <td><?= $discountsFood->has('discount') ? $this->Html->link($discountsFood->discount->name, ['controller' => 'Discounts', 'action' => 'view', $discountsFood->discount->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($discountsFood->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($discountsFood->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($discountsFood->modified) ?></td>
        </tr>
    </table>
</div>
