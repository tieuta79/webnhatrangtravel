<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Imageevent $imageevent
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Imageevent'), ['action' => 'edit', $imageevent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Imageevent'), ['action' => 'delete', $imageevent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imageevent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Imageevents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Imageevent'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="imageevents view large-9 medium-8 columns content">
    <h3><?= h($imageevent->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $imageevent->has('event') ? $this->Html->link($imageevent->event->title, ['controller' => 'Events', 'action' => 'view', $imageevent->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($imageevent->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($imageevent->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($imageevent->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($imageevent->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $imageevent->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Featured') ?></th>
            <td><?= $imageevent->featured ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
