<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Imagetour[]|\Cake\Collection\CollectionInterface $imagetours
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Imagetour'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tours'), ['controller' => 'Tours', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tour'), ['controller' => 'Tours', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imagetours index large-9 medium-8 columns content">
    <h3><?= __('Imagetours') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tour_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('featured') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($imagetours as $imagetour): ?>
            <tr>
                <td><?= $this->Number->format($imagetour->id) ?></td>
                <td><?= $imagetour->has('tour') ? $this->Html->link($imagetour->tour->name, ['controller' => 'Tours', 'action' => 'view', $imagetour->tour->id]) : '' ?></td>
                <td><?= h($imagetour->image) ?></td>
                <td><?= h($imagetour->status) ?></td>
                <td><?= h($imagetour->featured) ?></td>
                <td><?= h($imagetour->created) ?></td>
                <td><?= h($imagetour->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $imagetour->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $imagetour->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $imagetour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagetour->id)]) ?>
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
