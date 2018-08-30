<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Detail $detail
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Detail'), ['action' => 'edit', $detail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Detail'), ['action' => 'delete', $detail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Details'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Detail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Plans'), ['controller' => 'Plans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plan'), ['controller' => 'Plans', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Places'), ['controller' => 'Places', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Place'), ['controller' => 'Places', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="details view large-9 medium-8 columns content">
    <h3><?= h($detail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Plan') ?></th>
            <td><?= $detail->has('plan') ? $this->Html->link($detail->plan->name, ['controller' => 'Plans', 'action' => 'view', $detail->plan->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Place') ?></th>
            <td><?= $detail->has('place') ? $this->Html->link($detail->place->name, ['controller' => 'Places', 'action' => 'view', $detail->place->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($detail->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Timevisit') ?></th>
            <td><?= h($detail->timevisit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Timemove') ?></th>
            <td><?= h($detail->timemove) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($detail->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($detail->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($detail->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $detail->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Featured') ?></th>
            <td><?= $detail->featured ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Note') ?></h4>
        <?= $this->Text->autoParagraph(h($detail->note)); ?>
    </div>
</div>
