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
                ['action' => 'delete', $typetour->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $typetour->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Typetours'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="typetours form large-9 medium-8 columns content">
    <?= $this->Form->create($typetour) ?>
    <fieldset>
        <legend><?= __('Edit Typetour') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('slug');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
