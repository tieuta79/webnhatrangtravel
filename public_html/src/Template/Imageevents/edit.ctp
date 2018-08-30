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
                ['action' => 'delete', $imageevent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $imageevent->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Imageevents'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imageevents form large-9 medium-8 columns content">
    <?= $this->Form->create($imageevent) ?>
    <fieldset>
        <legend><?= __('Edit Imageevent') ?></legend>
        <?php
            echo $this->Form->control('event_id', ['options' => $events, 'empty' => true]);
            echo $this->Form->control('image');
            echo $this->Form->control('status');
            echo $this->Form->control('featured');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
