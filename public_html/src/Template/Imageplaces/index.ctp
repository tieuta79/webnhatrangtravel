<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Imageplace[]|\Cake\Collection\CollectionInterface $imageplaces
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Imageplace'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Places'), ['controller' => 'Places', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Place'), ['controller' => 'Places', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imageplaces index large-9 medium-8 columns content">
    <h3><?= __('Imageplaces') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('place_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('featured') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($imageplaces as $imageplace): ?>
            <tr>
                <td><?= $this->Number->format($imageplace->id) ?></td>
                <td><?= $imageplace->has('place') ? $this->Html->link($imageplace->place->name, ['controller' => 'Places', 'action' => 'view', $imageplace->place->id]) : '' ?></td>
                <td><?= h($imageplace->image) ?></td>
                <td><?= h($imageplace->status) ?></td>
                <td><?= h($imageplace->featured) ?></td>
                <td><?= h($imageplace->created) ?></td>
                <td><?= h($imageplace->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $imageplace->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $imageplace->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $imageplace->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imageplace->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
