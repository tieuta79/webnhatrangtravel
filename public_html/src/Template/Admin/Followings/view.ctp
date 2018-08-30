<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Following $following
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Following'), ['action' => 'edit', $following->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Following'), ['action' => 'delete', $following->id], ['confirm' => __('Are you sure you want to delete # {0}?', $following->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Followings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Following'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Followings'), ['controller' => 'Followings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Following'), ['controller' => 'Followings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="followings view large-9 medium-8 columns content">
    <h3><?= h($following->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Following') ?></th>
            <td><?= $following->has('following') ? $this->Html->link($following->following->id, ['controller' => 'Followings', 'action' => 'view', $following->following->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $following->has('user') ? $this->Html->link($following->user->name, ['controller' => 'Users', 'action' => 'view', $following->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($following->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($following->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($following->modified) ?></td>
        </tr>
    </table>
</div>
