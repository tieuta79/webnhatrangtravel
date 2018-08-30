<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Likevehicle $likevehicle
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Likevehicle'), ['action' => 'edit', $likevehicle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Likevehicle'), ['action' => 'delete', $likevehicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $likevehicle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Likevehicles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Likevehicle'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="likevehicles view large-9 medium-8 columns content">
    <h3><?= h($likevehicle->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $likevehicle->has('user') ? $this->Html->link($likevehicle->user->name, ['controller' => 'Users', 'action' => 'view', $likevehicle->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vehicle') ?></th>
            <td><?= $likevehicle->has('vehicle') ? $this->Html->link($likevehicle->vehicle->name, ['controller' => 'Vehicles', 'action' => 'view', $likevehicle->vehicle->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($likevehicle->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($likevehicle->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($likevehicle->modified) ?></td>
        </tr>
    </table>
</div>
