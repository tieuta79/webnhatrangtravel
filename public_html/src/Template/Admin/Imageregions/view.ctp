<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Imageregion $imageregion
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Imageregion'), ['action' => 'edit', $imageregion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Imageregion'), ['action' => 'delete', $imageregion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imageregion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Imageregions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Imageregion'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="imageregions view large-9 medium-8 columns content">
    <h3><?= h($imageregion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Region') ?></th>
            <td><?= $imageregion->has('region') ? $this->Html->link($imageregion->region->name, ['controller' => 'Regions', 'action' => 'view', $imageregion->region->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($imageregion->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($imageregion->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($imageregion->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($imageregion->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $imageregion->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Featured') ?></th>
            <td><?= $imageregion->featured ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
