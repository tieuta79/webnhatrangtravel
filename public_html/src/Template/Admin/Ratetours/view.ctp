<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ratetour $ratetour
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ratetour'), ['action' => 'edit', $ratetour->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ratetour'), ['action' => 'delete', $ratetour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ratetour->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ratetours'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ratetour'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tours'), ['controller' => 'Tours', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tour'), ['controller' => 'Tours', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ratetours view large-9 medium-8 columns content">
    <h3><?= h($ratetour->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $ratetour->has('user') ? $this->Html->link($ratetour->user->name, ['controller' => 'Users', 'action' => 'view', $ratetour->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tour') ?></th>
            <td><?= $ratetour->has('tour') ? $this->Html->link($ratetour->tour->name, ['controller' => 'Tours', 'action' => 'view', $ratetour->tour->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ratetour->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Point') ?></th>
            <td><?= $this->Number->format($ratetour->point) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ratetour->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($ratetour->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $ratetour->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Featured') ?></th>
            <td><?= $ratetour->featured ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($ratetour->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Desription') ?></h4>
        <?= $this->Text->autoParagraph(h($ratetour->desription)); ?>
    </div>
</div>
