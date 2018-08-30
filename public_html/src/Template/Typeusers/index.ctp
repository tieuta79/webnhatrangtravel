<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Typeuser[]|\Cake\Collection\CollectionInterface $typeusers
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Typeuser'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="typeusers index large-9 medium-8 columns content">
    <h3><?= __('Typeusers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('slug') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($typeusers as $typeuser): ?>
            <tr>
                <td><?= $this->Number->format($typeuser->id) ?></td>
                <td><?= h($typeuser->name) ?></td>
                <td><?= h($typeuser->slug) ?></td>
                <td><?= h($typeuser->created) ?></td>
                <td><?= h($typeuser->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $typeuser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $typeuser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $typeuser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeuser->id)]) ?>
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
