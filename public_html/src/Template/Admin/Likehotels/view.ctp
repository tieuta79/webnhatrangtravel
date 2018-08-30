<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Likehotel $likehotel
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Likehotel'), ['action' => 'edit', $likehotel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Likehotel'), ['action' => 'delete', $likehotel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $likehotel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Likehotels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Likehotel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="likehotels view large-9 medium-8 columns content">
    <h3><?= h($likehotel->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $likehotel->has('user') ? $this->Html->link($likehotel->user->name, ['controller' => 'Users', 'action' => 'view', $likehotel->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hotel') ?></th>
            <td><?= $likehotel->has('hotel') ? $this->Html->link($likehotel->hotel->name, ['controller' => 'Hotels', 'action' => 'view', $likehotel->hotel->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($likehotel->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($likehotel->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($likehotel->modified) ?></td>
        </tr>
    </table>
</div>
