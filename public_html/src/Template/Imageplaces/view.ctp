<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Imageplace $imageplace
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Imageplace'), ['action' => 'edit', $imageplace->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Imageplace'), ['action' => 'delete', $imageplace->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imageplace->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Imageplaces'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Imageplace'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Places'), ['controller' => 'Places', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Place'), ['controller' => 'Places', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="imageplaces view large-9 medium-8 columns content">
    <h3><?= h($imageplace->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Place') ?></th>
            <td><?= $imageplace->has('place') ? $this->Html->link($imageplace->place->name, ['controller' => 'Places', 'action' => 'view', $imageplace->place->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($imageplace->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($imageplace->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($imageplace->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($imageplace->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $imageplace->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Featured') ?></th>
            <td><?= $imageplace->featured ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
