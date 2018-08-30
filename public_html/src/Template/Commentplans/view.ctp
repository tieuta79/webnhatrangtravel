<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Commentplan $commentplan
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Commentplan'), ['action' => 'edit', $commentplan->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Commentplan'), ['action' => 'delete', $commentplan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commentplan->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Commentplans'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Commentplan'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Plans'), ['controller' => 'Plans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plan'), ['controller' => 'Plans', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="commentplans view large-9 medium-8 columns content">
    <h3><?= h($commentplan->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $commentplan->has('user') ? $this->Html->link($commentplan->user->name, ['controller' => 'Users', 'action' => 'view', $commentplan->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Plan') ?></th>
            <td><?= $commentplan->has('plan') ? $this->Html->link($commentplan->plan->name, ['controller' => 'Plans', 'action' => 'view', $commentplan->plan->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($commentplan->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($commentplan->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($commentplan->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $commentplan->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Featured') ?></th>
            <td><?= $commentplan->featured ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($commentplan->content)); ?>
    </div>
</div>
