<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Likeplace $likeplace
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Likeplace'), ['action' => 'edit', $likeplace->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Likeplace'), ['action' => 'delete', $likeplace->id], ['confirm' => __('Are you sure you want to delete # {0}?', $likeplace->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Likeplaces'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Likeplace'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Places'), ['controller' => 'Places', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Place'), ['controller' => 'Places', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="likeplaces view large-9 medium-8 columns content">
    <h3><?= h($likeplace->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $likeplace->has('user') ? $this->Html->link($likeplace->user->name, ['controller' => 'Users', 'action' => 'view', $likeplace->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Place') ?></th>
            <td><?= $likeplace->has('place') ? $this->Html->link($likeplace->place->name, ['controller' => 'Places', 'action' => 'view', $likeplace->place->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($likeplace->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($likeplace->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($likeplace->modified) ?></td>
        </tr>
    </table>
</div>
