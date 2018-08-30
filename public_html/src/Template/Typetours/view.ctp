<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Typetour $typetour
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Typetour'), ['action' => 'edit', $typetour->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Typetour'), ['action' => 'delete', $typetour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typetour->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Typetours'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typetour'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typetours view large-9 medium-8 columns content">
    <h3><?= h($typetour->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($typetour->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($typetour->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($typetour->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($typetour->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Slug') ?></h4>
        <?= $this->Text->autoParagraph(h($typetour->slug)); ?>
    </div>
</div>
