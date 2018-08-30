<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Imagereview $imagereview
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Imagereview'), ['action' => 'edit', $imagereview->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Imagereview'), ['action' => 'delete', $imagereview->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagereview->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Imagereviews'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Imagereview'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reviews'), ['controller' => 'Reviews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Review'), ['controller' => 'Reviews', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="imagereviews view large-9 medium-8 columns content">
    <h3><?= h($imagereview->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Review') ?></th>
            <td><?= $imagereview->has('review') ? $this->Html->link($imagereview->review->name, ['controller' => 'Reviews', 'action' => 'view', $imagereview->review->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($imagereview->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($imagereview->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($imagereview->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $imagereview->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Featured') ?></th>
            <td><?= $imagereview->featured ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($imagereview->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Image') ?></h4>
        <?= $this->Text->autoParagraph(h($imagereview->image)); ?>
    </div>
</div>
