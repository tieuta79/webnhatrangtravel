<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Whishlist $whishlist
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Whishlist'), ['action' => 'edit', $whishlist->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Whishlist'), ['action' => 'delete', $whishlist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $whishlist->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Whishlists'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Whishlist'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Restaurants'), ['controller' => 'Restaurants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Restaurant'), ['controller' => 'Restaurants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tours'), ['controller' => 'Tours', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tour'), ['controller' => 'Tours', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Foods'), ['controller' => 'Foods', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Food'), ['controller' => 'Foods', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="whishlists view large-9 medium-8 columns content">
    <h3><?= h($whishlist->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $whishlist->has('user') ? $this->Html->link($whishlist->user->name, ['controller' => 'Users', 'action' => 'view', $whishlist->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hotel') ?></th>
            <td><?= $whishlist->has('hotel') ? $this->Html->link($whishlist->hotel->name, ['controller' => 'Hotels', 'action' => 'view', $whishlist->hotel->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Restaurant') ?></th>
            <td><?= $whishlist->has('restaurant') ? $this->Html->link($whishlist->restaurant->name, ['controller' => 'Restaurants', 'action' => 'view', $whishlist->restaurant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tour') ?></th>
            <td><?= $whishlist->has('tour') ? $this->Html->link($whishlist->tour->name, ['controller' => 'Tours', 'action' => 'view', $whishlist->tour->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vehicle') ?></th>
            <td><?= $whishlist->has('vehicle') ? $this->Html->link($whishlist->vehicle->name, ['controller' => 'Vehicles', 'action' => 'view', $whishlist->vehicle->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Food') ?></th>
            <td><?= $whishlist->has('food') ? $this->Html->link($whishlist->food->name, ['controller' => 'Foods', 'action' => 'view', $whishlist->food->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($whishlist->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($whishlist->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($whishlist->modified) ?></td>
        </tr>
    </table>
</div>
