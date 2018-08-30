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
                ['action' => 'delete', $typereview->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $typereview->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Typereviews'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Reviews'), ['controller' => 'Reviews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Review'), ['controller' => 'Reviews', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="typereviews form large-9 medium-8 columns content">
    <?= $this->Form->create($typereview) ?>
    <fieldset>
        <legend><?= __('Edit Typereview') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('slug');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
