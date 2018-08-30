<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Slide[]|\Cake\Collection\CollectionInterface $slides
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Slide'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="slides index large-9 medium-8 columns content">
    <h3><?= __('Slides') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('slug') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('featured') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($slides as $slide): ?>
            <tr>
                <td><?= $this->Number->format($slide->id) ?></td>
                <td><?= h($slide->name) ?></td>
                <td><?= h($slide->slug) ?></td>
                <td><?= h($slide->image) ?></td>
                <td><?= h($slide->status) ?></td>
                <td><?= h($slide->featured) ?></td>
                <td><?= h($slide->created) ?></td>
                <td><?= h($slide->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $slide->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $slide->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $slide->id], ['confirm' => __('Are you sure you want to delete # {0}?', $slide->id)]) ?>
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
