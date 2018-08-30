<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Imageevent[]|\Cake\Collection\CollectionInterface $imageevents
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Imageevent'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imageevents index large-9 medium-8 columns content">
    <h3><?= __('Imageevents') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('event_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('featured') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($imageevents as $imageevent): ?>
            <tr>
                <td><?= $this->Number->format($imageevent->id) ?></td>
                <td><?= $imageevent->has('event') ? $this->Html->link($imageevent->event->title, ['controller' => 'Events', 'action' => 'view', $imageevent->event->id]) : '' ?></td>
                <td><?= h($imageevent->image) ?></td>
                <td><?= h($imageevent->status) ?></td>
                <td><?= h($imageevent->featured) ?></td>
                <td><?= h($imageevent->created) ?></td>
                <td><?= h($imageevent->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $imageevent->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $imageevent->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $imageevent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imageevent->id)]) ?>
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
