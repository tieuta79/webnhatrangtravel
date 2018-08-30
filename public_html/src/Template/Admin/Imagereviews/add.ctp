<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Imagereviews'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Reviews'), ['controller' => 'Reviews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Review'), ['controller' => 'Reviews', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imagereviews form large-9 medium-8 columns content">
    <?= $this->Form->create($imagereview) ?>
    <fieldset>
        <legend><?= __('Add Imagereview') ?></legend>
        <?php
            echo $this->Form->control('review_id', ['options' => $reviews, 'empty' => true]);
            echo $this->Form->control('name');
            echo $this->Form->control('image');
            echo $this->Form->control('status');
            echo $this->Form->control('featured');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
