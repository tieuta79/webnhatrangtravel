<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Imageregion[]|\Cake\Collection\CollectionInterface $imageregions
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Imageregion'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imageregions index large-9 medium-8 columns content">
    <h3><?= __('Imageregions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('region_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('featured') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($imageregions as $imageregion): ?>
            <tr>
                <td><?= $this->Number->format($imageregion->id) ?></td>
                <td><?= $imageregion->has('region') ? $this->Html->link($imageregion->region->name, ['controller' => 'Regions', 'action' => 'view', $imageregion->region->id]) : '' ?></td>
                <td><?= h($imageregion->image) ?></td>
                <td><?= h($imageregion->status) ?></td>
                <td><?= h($imageregion->featured) ?></td>
                <td><?= h($imageregion->created) ?></td>
                <td><?= h($imageregion->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $imageregion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $imageregion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $imageregion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imageregion->id)]) ?>
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
