<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Raterestaurant $raterestaurant
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Raterestaurant'), ['action' => 'edit', $raterestaurant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Raterestaurant'), ['action' => 'delete', $raterestaurant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $raterestaurant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Raterestaurants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Raterestaurant'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Restaurants'), ['controller' => 'Restaurants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Restaurant'), ['controller' => 'Restaurants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="raterestaurants view large-9 medium-8 columns content">
    <h3><?= h($raterestaurant->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $raterestaurant->has('user') ? $this->Html->link($raterestaurant->user->name, ['controller' => 'Users', 'action' => 'view', $raterestaurant->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Restaurant') ?></th>
            <td><?= $raterestaurant->has('restaurant') ? $this->Html->link($raterestaurant->restaurant->name, ['controller' => 'Restaurants', 'action' => 'view', $raterestaurant->restaurant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($raterestaurant->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Point') ?></th>
            <td><?= $this->Number->format($raterestaurant->point) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($raterestaurant->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($raterestaurant->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $raterestaurant->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Featured') ?></th>
            <td><?= $raterestaurant->featured ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($raterestaurant->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($raterestaurant->description)); ?>
    </div>
</div>
