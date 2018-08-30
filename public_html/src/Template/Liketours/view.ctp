<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Liketour $liketour
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Liketour'), ['action' => 'edit', $liketour->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Liketour'), ['action' => 'delete', $liketour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $liketour->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Liketours'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Liketour'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tours'), ['controller' => 'Tours', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tour'), ['controller' => 'Tours', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="liketours view large-9 medium-8 columns content">
    <h3><?= h($liketour->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $liketour->has('user') ? $this->Html->link($liketour->user->name, ['controller' => 'Users', 'action' => 'view', $liketour->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tour') ?></th>
            <td><?= $liketour->has('tour') ? $this->Html->link($liketour->tour->name, ['controller' => 'Tours', 'action' => 'view', $liketour->tour->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($liketour->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($liketour->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($liketour->modified) ?></td>
        </tr>
    </table>
</div>
