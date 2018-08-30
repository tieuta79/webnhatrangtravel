<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ratetour[]|\Cake\Collection\CollectionInterface $ratetours
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ratetour'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tours'), ['controller' => 'Tours', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tour'), ['controller' => 'Tours', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ratetours index large-9 medium-8 columns content">
    <h3><?= __('Ratetours') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tour_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('point') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('featured') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ratetours as $ratetour): ?>
            <tr>
                <td><?= $this->Number->format($ratetour->id) ?></td>
                <td><?= $ratetour->has('user') ? $this->Html->link($ratetour->user->name, ['controller' => 'Users', 'action' => 'view', $ratetour->user->id]) : '' ?></td>
                <td><?= $ratetour->has('tour') ? $this->Html->link($ratetour->tour->name, ['controller' => 'Tours', 'action' => 'view', $ratetour->tour->id]) : '' ?></td>
                <td><?= $this->Number->format($ratetour->point) ?></td>
                <td><?= h($ratetour->status) ?></td>
                <td><?= h($ratetour->featured) ?></td>
                <td><?= h($ratetour->created) ?></td>
                <td><?= h($ratetour->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ratetour->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ratetour->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ratetour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ratetour->id)]) ?>
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
