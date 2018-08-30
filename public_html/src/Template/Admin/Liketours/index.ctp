<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Liketour[]|\Cake\Collection\CollectionInterface $liketours
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Liketour'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tours'), ['controller' => 'Tours', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tour'), ['controller' => 'Tours', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="liketours index large-9 medium-8 columns content">
    <h3><?= __('Liketours') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tour_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($liketours as $liketour): ?>
            <tr>
                <td><?= $this->Number->format($liketour->id) ?></td>
                <td><?= $liketour->has('user') ? $this->Html->link($liketour->user->name, ['controller' => 'Users', 'action' => 'view', $liketour->user->id]) : '' ?></td>
                <td><?= $liketour->has('tour') ? $this->Html->link($liketour->tour->name, ['controller' => 'Tours', 'action' => 'view', $liketour->tour->id]) : '' ?></td>
                <td><?= h($liketour->created) ?></td>
                <td><?= h($liketour->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $liketour->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $liketour->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $liketour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $liketour->id)]) ?>
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
