<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Rateevent $rateevent
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rateevent'), ['action' => 'edit', $rateevent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rateevent'), ['action' => 'delete', $rateevent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rateevent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rateevents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rateevent'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rateevents view large-9 medium-8 columns content">
    <h3><?= h($rateevent->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $rateevent->has('user') ? $this->Html->link($rateevent->user->name, ['controller' => 'Users', 'action' => 'view', $rateevent->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $rateevent->has('event') ? $this->Html->link($rateevent->event->title, ['controller' => 'Events', 'action' => 'view', $rateevent->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($rateevent->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Point') ?></th>
            <td><?= $this->Number->format($rateevent->point) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($rateevent->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($rateevent->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $rateevent->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Featured') ?></th>
            <td><?= $rateevent->featured ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($rateevent->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($rateevent->description)); ?>
    </div>
</div>
