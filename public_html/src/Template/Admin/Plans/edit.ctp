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
                ['action' => 'delete', $plan->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $plan->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Plans'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Details'), ['controller' => 'Details', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Detail'), ['controller' => 'Details', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Likeplans'), ['controller' => 'Likeplans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Likeplan'), ['controller' => 'Likeplans', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="plans form large-9 medium-8 columns content">
    <?= $this->Form->create($plan) ?>
    <fieldset>
        <legend><?= __('Edit Plan') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('name');
            echo $this->Form->control('image');
            echo $this->Form->control('start_point');
            echo $this->Form->control('arrival_point');
            echo $this->Form->control('start', ['empty' => true]);
            echo $this->Form->control('end', ['empty' => true]);
            echo $this->Form->control('status');
            echo $this->Form->control('featured');
            echo $this->Form->control('view');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
