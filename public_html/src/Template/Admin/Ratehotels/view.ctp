<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ratehotel $ratehotel
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ratehotel'), ['action' => 'edit', $ratehotel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ratehotel'), ['action' => 'delete', $ratehotel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ratehotel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ratehotels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ratehotel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ratehotels view large-9 medium-8 columns content">
    <h3><?= h($ratehotel->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $ratehotel->has('user') ? $this->Html->link($ratehotel->user->name, ['controller' => 'Users', 'action' => 'view', $ratehotel->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hotel') ?></th>
            <td><?= $ratehotel->has('hotel') ? $this->Html->link($ratehotel->hotel->name, ['controller' => 'Hotels', 'action' => 'view', $ratehotel->hotel->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ratehotel->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Point') ?></th>
            <td><?= $this->Number->format($ratehotel->point) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ratehotel->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($ratehotel->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $ratehotel->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Featured') ?></th>
            <td><?= $ratehotel->featured ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($ratehotel->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($ratehotel->description)); ?>
    </div>
</div>
