<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Likeevent $likeevent
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Likeevent'), ['action' => 'edit', $likeevent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Likeevent'), ['action' => 'delete', $likeevent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $likeevent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Likeevents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Likeevent'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="likeevents view large-9 medium-8 columns content">
    <h3><?= h($likeevent->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $likeevent->has('user') ? $this->Html->link($likeevent->user->name, ['controller' => 'Users', 'action' => 'view', $likeevent->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $likeevent->has('event') ? $this->Html->link($likeevent->event->title, ['controller' => 'Events', 'action' => 'view', $likeevent->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($likeevent->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($likeevent->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($likeevent->modified) ?></td>
        </tr>
    </table>
</div>
