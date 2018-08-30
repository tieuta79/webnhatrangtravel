<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ratevehicle $ratevehicle
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ratevehicle'), ['action' => 'edit', $ratevehicle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ratevehicle'), ['action' => 'delete', $ratevehicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ratevehicle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ratevehicles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ratevehicle'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ratevehicles view large-9 medium-8 columns content">
    <h3><?= h($ratevehicle->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $ratevehicle->has('user') ? $this->Html->link($ratevehicle->user->name, ['controller' => 'Users', 'action' => 'view', $ratevehicle->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vehicle') ?></th>
            <td><?= $ratevehicle->has('vehicle') ? $this->Html->link($ratevehicle->vehicle->name, ['controller' => 'Vehicles', 'action' => 'view', $ratevehicle->vehicle->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ratevehicle->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Point') ?></th>
            <td><?= $this->Number->format($ratevehicle->point) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ratevehicle->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($ratevehicle->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $ratevehicle->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Featured') ?></th>
            <td><?= $ratevehicle->featured ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($ratevehicle->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($ratevehicle->description)); ?>
    </div>
</div>
