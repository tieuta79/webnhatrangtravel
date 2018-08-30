<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Likerestaurant $likerestaurant
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Likerestaurant'), ['action' => 'edit', $likerestaurant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Likerestaurant'), ['action' => 'delete', $likerestaurant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $likerestaurant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Likerestaurants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Likerestaurant'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Restaurants'), ['controller' => 'Restaurants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Restaurant'), ['controller' => 'Restaurants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="likerestaurants view large-9 medium-8 columns content">
    <h3><?= h($likerestaurant->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $likerestaurant->has('user') ? $this->Html->link($likerestaurant->user->name, ['controller' => 'Users', 'action' => 'view', $likerestaurant->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Restaurant') ?></th>
            <td><?= $likerestaurant->has('restaurant') ? $this->Html->link($likerestaurant->restaurant->name, ['controller' => 'Restaurants', 'action' => 'view', $likerestaurant->restaurant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($likerestaurant->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($likerestaurant->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($likerestaurant->modified) ?></td>
        </tr>
    </table>
</div>
