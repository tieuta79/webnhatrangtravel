<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Typefood[]|\Cake\Collection\CollectionInterface $typefoods
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Typefood'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Foods'), ['controller' => 'Foods', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food'), ['controller' => 'Foods', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="typefoods index large-9 medium-8 columns content">
    <h3><?= __('Typefoods') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($typefoods as $typefood): ?>
            <tr>
                <td><?= $this->Number->format($typefood->id) ?></td>
                <td><?= h($typefood->name) ?></td>
                <td><?= h($typefood->created) ?></td>
                <td><?= h($typefood->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $typefood->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $typefood->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $typefood->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typefood->id)]) ?>
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
