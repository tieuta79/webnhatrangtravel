<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Imagetour $imagetour
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Imagetour'), ['action' => 'edit', $imagetour->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Imagetour'), ['action' => 'delete', $imagetour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagetour->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Imagetours'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Imagetour'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tours'), ['controller' => 'Tours', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tour'), ['controller' => 'Tours', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="imagetours view large-9 medium-8 columns content">
    <h3><?= h($imagetour->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tour') ?></th>
            <td><?= $imagetour->has('tour') ? $this->Html->link($imagetour->tour->name, ['controller' => 'Tours', 'action' => 'view', $imagetour->tour->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($imagetour->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($imagetour->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($imagetour->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($imagetour->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $imagetour->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Featured') ?></th>
            <td><?= $imagetour->featured ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
