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
                ['action' => 'delete', $ratetour->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ratetour->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ratetours'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tours'), ['controller' => 'Tours', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tour'), ['controller' => 'Tours', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ratetours form large-9 medium-8 columns content">
    <?= $this->Form->create($ratetour) ?>
    <fieldset>
        <legend><?= __('Edit Ratetour') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('tour_id', ['options' => $tours, 'empty' => true]);
            echo $this->Form->control('point');
            echo $this->Form->control('name');
            echo $this->Form->control('desription');
            echo $this->Form->control('status');
            echo $this->Form->control('featured');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
