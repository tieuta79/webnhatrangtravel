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
                ['action' => 'delete', $detail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $detail->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Details'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Plans'), ['controller' => 'Plans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Plan'), ['controller' => 'Plans', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Places'), ['controller' => 'Places', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Place'), ['controller' => 'Places', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="details form large-9 medium-8 columns content">
    <?= $this->Form->create($detail) ?>
    <fieldset>
        <legend><?= __('Edit Detail') ?></legend>
        <?php
            echo $this->Form->control('plan_id', ['options' => $plans, 'empty' => true]);
            echo $this->Form->control('place_id', ['options' => $places, 'empty' => true]);
            echo $this->Form->control('timevisit', ['empty' => true]);
            echo $this->Form->control('timemove', ['empty' => true]);
            echo $this->Form->control('date', ['empty' => true]);
            echo $this->Form->control('note');
            echo $this->Form->control('status');
            echo $this->Form->control('featured');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
