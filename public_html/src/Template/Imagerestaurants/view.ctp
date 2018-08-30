<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Imagerestaurant $imagerestaurant
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Imagerestaurant'), ['action' => 'edit', $imagerestaurant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Imagerestaurant'), ['action' => 'delete', $imagerestaurant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagerestaurant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Imagerestaurants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Imagerestaurant'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Restaurants'), ['controller' => 'Restaurants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Restaurant'), ['controller' => 'Restaurants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="imagerestaurants view large-9 medium-8 columns content">
    <h3><?= h($imagerestaurant->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Restaurant') ?></th>
            <td><?= $imagerestaurant->has('restaurant') ? $this->Html->link($imagerestaurant->restaurant->name, ['controller' => 'Restaurants', 'action' => 'view', $imagerestaurant->restaurant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($imagerestaurant->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($imagerestaurant->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($imagerestaurant->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($imagerestaurant->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $imagerestaurant->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Featured') ?></th>
            <td><?= $imagerestaurant->featured ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
