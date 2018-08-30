<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Likeplan $likeplan
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Likeplan'), ['action' => 'edit', $likeplan->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Likeplan'), ['action' => 'delete', $likeplan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $likeplan->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Likeplans'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Likeplan'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Plans'), ['controller' => 'Plans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plan'), ['controller' => 'Plans', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="likeplans view large-9 medium-8 columns content">
    <h3><?= h($likeplan->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $likeplan->has('user') ? $this->Html->link($likeplan->user->name, ['controller' => 'Users', 'action' => 'view', $likeplan->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Plan') ?></th>
            <td><?= $likeplan->has('plan') ? $this->Html->link($likeplan->plan->name, ['controller' => 'Plans', 'action' => 'view', $likeplan->plan->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($likeplan->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($likeplan->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($likeplan->modified) ?></td>
        </tr>
    </table>
</div>
