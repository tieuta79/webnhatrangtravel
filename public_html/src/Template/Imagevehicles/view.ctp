<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Imagevehicle $imagevehicle
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Imagevehicle'), ['action' => 'edit', $imagevehicle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Imagevehicle'), ['action' => 'delete', $imagevehicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagevehicle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Imagevehicles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Imagevehicle'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="imagevehicles view large-9 medium-8 columns content">
    <h3><?= h($imagevehicle->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Vehicle') ?></th>
            <td><?= $imagevehicle->has('vehicle') ? $this->Html->link($imagevehicle->vehicle->name, ['controller' => 'Vehicles', 'action' => 'view', $imagevehicle->vehicle->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($imagevehicle->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($imagevehicle->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($imagevehicle->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($imagevehicle->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $imagevehicle->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Featured') ?></th>
            <td><?= $imagevehicle->featured ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
