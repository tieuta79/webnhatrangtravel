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
                ['action' => 'delete', $rateplace->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rateplace->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Rateplaces'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Places'), ['controller' => 'Places', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Place'), ['controller' => 'Places', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rateplaces form large-9 medium-8 columns content">
    <?= $this->Form->create($rateplace) ?>
    <fieldset>
        <legend><?= __('Edit Rateplace') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('place_id', ['options' => $places, 'empty' => true]);
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
