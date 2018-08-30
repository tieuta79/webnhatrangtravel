<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Blackuser $blackuser
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Blackuser'), ['action' => 'edit', $blackuser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Blackuser'), ['action' => 'delete', $blackuser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blackuser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Blackusers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Blackuser'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="blackusers view large-9 medium-8 columns content">
    <h3><?= h($blackuser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $blackuser->has('user') ? $this->Html->link($blackuser->user->name, ['controller' => 'Users', 'action' => 'view', $blackuser->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($blackuser->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($blackuser->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($blackuser->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripton') ?></h4>
        <?= $this->Text->autoParagraph(h($blackuser->descripton)); ?>
    </div>
</div>
