<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Rateplace $rateplace
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rateplace'), ['action' => 'edit', $rateplace->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rateplace'), ['action' => 'delete', $rateplace->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rateplace->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rateplaces'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rateplace'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Places'), ['controller' => 'Places', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Place'), ['controller' => 'Places', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rateplaces view large-9 medium-8 columns content">
    <h3><?= h($rateplace->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $rateplace->has('user') ? $this->Html->link($rateplace->user->name, ['controller' => 'Users', 'action' => 'view', $rateplace->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Place') ?></th>
            <td><?= $rateplace->has('place') ? $this->Html->link($rateplace->place->name, ['controller' => 'Places', 'action' => 'view', $rateplace->place->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($rateplace->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Point') ?></th>
            <td><?= $this->Number->format($rateplace->point) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($rateplace->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($rateplace->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $rateplace->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Featured') ?></th>
            <td><?= $rateplace->featured ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($rateplace->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($rateplace->description)); ?>
    </div>
</div>
