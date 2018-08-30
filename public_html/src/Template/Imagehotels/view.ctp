<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Imagehotel $imagehotel
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Imagehotel'), ['action' => 'edit', $imagehotel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Imagehotel'), ['action' => 'delete', $imagehotel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagehotel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Imagehotels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Imagehotel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="imagehotels view large-9 medium-8 columns content">
    <h3><?= h($imagehotel->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Hotel') ?></th>
            <td><?= $imagehotel->has('hotel') ? $this->Html->link($imagehotel->hotel->name, ['controller' => 'Hotels', 'action' => 'view', $imagehotel->hotel->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($imagehotel->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($imagehotel->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($imagehotel->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($imagehotel->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $imagehotel->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Featured') ?></th>
            <td><?= $imagehotel->featured ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
