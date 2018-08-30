<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ratevehicle->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ratevehicle->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ratevehicles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ratevehicles form large-9 medium-8 columns content">
    <?= $this->Form->create($ratevehicle) ?>
    <fieldset>
        <legend><?= __('Edit Ratevehicle') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('vehicle_id', ['options' => $vehicles, 'empty' => true]);
            echo $this->Form->control('point');
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('status');
            echo $this->Form->control('featured');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
