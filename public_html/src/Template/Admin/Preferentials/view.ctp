<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Preferential $preferential
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Preferential'), ['action' => 'edit', $preferential->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Preferential'), ['action' => 'delete', $preferential->id], ['confirm' => __('Are you sure you want to delete # {0}?', $preferential->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Preferentials'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Preferential'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="preferentials view large-9 medium-8 columns content">
    <h3><?= h($preferential->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Room') ?></th>
            <td><?= $preferential->has('room') ? $this->Html->link($preferential->room->name, ['controller' => 'Rooms', 'action' => 'view', $preferential->room->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($preferential->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($preferential->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($preferential->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripton') ?></h4>
        <?= $this->Text->autoParagraph(h($preferential->descripton)); ?>
    </div>
</div>
