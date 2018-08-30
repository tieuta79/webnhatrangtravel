<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Imagehotel[]|\Cake\Collection\CollectionInterface $imagehotels
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Imagehotel'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imagehotels index large-9 medium-8 columns content">
    <h3><?= __('Imagehotels') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hotel_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('featured') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($imagehotels as $imagehotel): ?>
            <tr>
                <td><?= $this->Number->format($imagehotel->id) ?></td>
                <td><?= $imagehotel->has('hotel') ? $this->Html->link($imagehotel->hotel->name, ['controller' => 'Hotels', 'action' => 'view', $imagehotel->hotel->id]) : '' ?></td>
                <td><?= h($imagehotel->image) ?></td>
                <td><?= h($imagehotel->status) ?></td>
                <td><?= h($imagehotel->featured) ?></td>
                <td><?= h($imagehotel->created) ?></td>
                <td><?= h($imagehotel->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $imagehotel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $imagehotel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $imagehotel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagehotel->id)]) ?>
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
