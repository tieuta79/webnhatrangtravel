<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Likereview $likereview
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Likereview'), ['action' => 'edit', $likereview->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Likereview'), ['action' => 'delete', $likereview->id], ['confirm' => __('Are you sure you want to delete # {0}?', $likereview->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Likereviews'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Likereview'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reviews'), ['controller' => 'Reviews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Review'), ['controller' => 'Reviews', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="likereviews view large-9 medium-8 columns content">
    <h3><?= h($likereview->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $likereview->has('user') ? $this->Html->link($likereview->user->name, ['controller' => 'Users', 'action' => 'view', $likereview->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Review') ?></th>
            <td><?= $likereview->has('review') ? $this->Html->link($likereview->review->name, ['controller' => 'Reviews', 'action' => 'view', $likereview->review->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($likereview->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($likereview->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($likereview->modified) ?></td>
        </tr>
    </table>
</div>
