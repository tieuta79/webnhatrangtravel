<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Tour[]|\Cake\Collection\CollectionInterface $tours
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tour'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Details'), ['controller' => 'Details', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Detail'), ['controller' => 'Details', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Imagetours'), ['controller' => 'Imagetours', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Imagetour'), ['controller' => 'Imagetours', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Whishlists'), ['controller' => 'Whishlists', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Whishlist'), ['controller' => 'Whishlists', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tours index large-9 medium-8 columns content">
    <h3><?= __('Tours') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('region_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('slug') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('view') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('featured') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tours as $tour): ?>
            <tr>
                <td><?= $this->Number->format($tour->id) ?></td>
                <td><?= $tour->has('user') ? $this->Html->link($tour->user->name, ['controller' => 'Users', 'action' => 'view', $tour->user->id]) : '' ?></td>
                <td><?= $tour->has('region') ? $this->Html->link($tour->region->name, ['controller' => 'Regions', 'action' => 'view', $tour->region->id]) : '' ?></td>
                <td><?= h($tour->name) ?></td>
                <td><?= h($tour->slug) ?></td>
                <td><?= h($tour->image) ?></td>
                <td><?= h($tour->start) ?></td>
                <td><?= h($tour->end) ?></td>
                <td><?= $this->Number->format($tour->view) ?></td>
                <td><?= h($tour->status) ?></td>
                <td><?= h($tour->featured) ?></td>
                <td><?= h($tour->created) ?></td>
                <td><?= h($tour->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tour->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tour->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tour->id)]) ?>
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
