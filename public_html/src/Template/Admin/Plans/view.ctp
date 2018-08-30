<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Plan $plan
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Plan'), ['action' => 'edit', $plan->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Plan'), ['action' => 'delete', $plan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $plan->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Plans'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plan'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Details'), ['controller' => 'Details', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Detail'), ['controller' => 'Details', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Likeplans'), ['controller' => 'Likeplans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Likeplan'), ['controller' => 'Likeplans', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="plans view large-9 medium-8 columns content">
    <h3><?= h($plan->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $plan->has('user') ? $this->Html->link($plan->user->name, ['controller' => 'Users', 'action' => 'view', $plan->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($plan->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Point') ?></th>
            <td><?= $this->Number->format($plan->start_point) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Arrival Point') ?></th>
            <td><?= $this->Number->format($plan->arrival_point) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('View') ?></th>
            <td><?= $this->Number->format($plan->view) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start') ?></th>
            <td><?= h($plan->start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End') ?></th>
            <td><?= h($plan->end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($plan->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($plan->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $plan->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Featured') ?></th>
            <td><?= $plan->featured ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($plan->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Image') ?></h4>
        <?= $this->Text->autoParagraph(h($plan->image)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Details') ?></h4>
        <?php if (!empty($plan->details)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Plan Id') ?></th>
                <th scope="col"><?= __('Place Id') ?></th>
                <th scope="col"><?= __('Timevisit') ?></th>
                <th scope="col"><?= __('Timemove') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Note') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Featured') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($plan->details as $details): ?>
            <tr>
                <td><?= h($details->id) ?></td>
                <td><?= h($details->plan_id) ?></td>
                <td><?= h($details->place_id) ?></td>
                <td><?= h($details->timevisit) ?></td>
                <td><?= h($details->timemove) ?></td>
                <td><?= h($details->date) ?></td>
                <td><?= h($details->note) ?></td>
                <td><?= h($details->status) ?></td>
                <td><?= h($details->featured) ?></td>
                <td><?= h($details->created) ?></td>
                <td><?= h($details->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Details', 'action' => 'view', $details->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Details', 'action' => 'edit', $details->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Details', 'action' => 'delete', $details->id], ['confirm' => __('Are you sure you want to delete # {0}?', $details->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Likeplans') ?></h4>
        <?php if (!empty($plan->likeplans)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Plan Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($plan->likeplans as $likeplans): ?>
            <tr>
                <td><?= h($likeplans->id) ?></td>
                <td><?= h($likeplans->user_id) ?></td>
                <td><?= h($likeplans->plan_id) ?></td>
                <td><?= h($likeplans->created) ?></td>
                <td><?= h($likeplans->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Likeplans', 'action' => 'view', $likeplans->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Likeplans', 'action' => 'edit', $likeplans->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Likeplans', 'action' => 'delete', $likeplans->id], ['confirm' => __('Are you sure you want to delete # {0}?', $likeplans->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
