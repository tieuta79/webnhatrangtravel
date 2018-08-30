<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Place[]|\Cake\Collection\CollectionInterface $places
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Place'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Typeplaces'), ['controller' => 'Typeplaces', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Typeplace'), ['controller' => 'Typeplaces', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Details'), ['controller' => 'Details', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Detail'), ['controller' => 'Details', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Imageplaces'), ['controller' => 'Imageplaces', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Imageplace'), ['controller' => 'Imageplaces', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="places index large-9 medium-8 columns content">
    <h3><?= __('Places') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('typeplace_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('region_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('slug') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('latitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('longitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('featured') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($places as $place): ?>
            <tr>
                <td><?= $this->Number->format($place->id) ?></td>
                <td><?= $place->has('typeplace') ? $this->Html->link($place->typeplace->name, ['controller' => 'Typeplaces', 'action' => 'view', $place->typeplace->id]) : '' ?></td>
                <td><?= $place->has('region') ? $this->Html->link($place->region->name, ['controller' => 'Regions', 'action' => 'view', $place->region->id]) : '' ?></td>
                <td><?= h($place->name) ?></td>
                <td><?= h($place->slug) ?></td>
                <td><?= h($place->image) ?></td>
                <td><?= h($place->latitude) ?></td>
                <td><?= h($place->longitude) ?></td>
                <td><?= h($place->status) ?></td>
                <td><?= h($place->featured) ?></td>
                <td><?= h($place->created) ?></td>
                <td><?= h($place->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $place->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $place->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $place->id], ['confirm' => __('Are you sure you want to delete # {0}?', $place->id)]) ?>
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
