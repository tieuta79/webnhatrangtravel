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
                ['action' => 'delete', $follower->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $follower->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Followers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Followers'), ['controller' => 'Followers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Follower'), ['controller' => 'Followers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="followers form large-9 medium-8 columns content">
    <?= $this->Form->create($follower) ?>
    <fieldset>
        <legend><?= __('Edit Follower') ?></legend>
        <?php
            echo $this->Form->control('follower_id');
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
