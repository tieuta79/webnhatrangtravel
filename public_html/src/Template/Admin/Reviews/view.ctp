<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Review $review
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Review'), ['action' => 'edit', $review->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Review'), ['action' => 'delete', $review->id], ['confirm' => __('Are you sure you want to delete # {0}?', $review->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Reviews'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Review'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Places'), ['controller' => 'Places', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Place'), ['controller' => 'Places', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Restaurants'), ['controller' => 'Restaurants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Restaurant'), ['controller' => 'Restaurants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tours'), ['controller' => 'Tours', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tour'), ['controller' => 'Tours', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Imagereviews'), ['controller' => 'Imagereviews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Imagereview'), ['controller' => 'Imagereviews', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Likereviews'), ['controller' => 'Likereviews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Likereview'), ['controller' => 'Likereviews', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="reviews view large-9 medium-8 columns content">
    <h3><?= h($review->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $review->has('user') ? $this->Html->link($review->user->name, ['controller' => 'Users', 'action' => 'view', $review->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $review->has('event') ? $this->Html->link($review->event->title, ['controller' => 'Events', 'action' => 'view', $review->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hotel') ?></th>
            <td><?= $review->has('hotel') ? $this->Html->link($review->hotel->name, ['controller' => 'Hotels', 'action' => 'view', $review->hotel->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Place') ?></th>
            <td><?= $review->has('place') ? $this->Html->link($review->place->name, ['controller' => 'Places', 'action' => 'view', $review->place->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Restaurant') ?></th>
            <td><?= $review->has('restaurant') ? $this->Html->link($review->restaurant->name, ['controller' => 'Restaurants', 'action' => 'view', $review->restaurant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tour') ?></th>
            <td><?= $review->has('tour') ? $this->Html->link($review->tour->name, ['controller' => 'Tours', 'action' => 'view', $review->tour->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vehicle') ?></th>
            <td><?= $review->has('vehicle') ? $this->Html->link($review->vehicle->name, ['controller' => 'Vehicles', 'action' => 'view', $review->vehicle->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($review->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($review->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($review->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($review->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $review->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Featured') ?></th>
            <td><?= $review->featured ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($review->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Image') ?></h4>
        <?= $this->Text->autoParagraph(h($review->image)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Comments') ?></h4>
        <?php if (!empty($review->comments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Review Id') ?></th>
                <th scope="col"><?= __('Content') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Featured') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($review->comments as $comments): ?>
            <tr>
                <td><?= h($comments->id) ?></td>
                <td><?= h($comments->user_id) ?></td>
                <td><?= h($comments->review_id) ?></td>
                <td><?= h($comments->content) ?></td>
                <td><?= h($comments->status) ?></td>
                <td><?= h($comments->featured) ?></td>
                <td><?= h($comments->created) ?></td>
                <td><?= h($comments->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Comments', 'action' => 'view', $comments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Comments', 'action' => 'edit', $comments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Comments', 'action' => 'delete', $comments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Imagereviews') ?></h4>
        <?php if (!empty($review->imagereviews)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Review Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Featured') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($review->imagereviews as $imagereviews): ?>
            <tr>
                <td><?= h($imagereviews->id) ?></td>
                <td><?= h($imagereviews->review_id) ?></td>
                <td><?= h($imagereviews->name) ?></td>
                <td><?= h($imagereviews->image) ?></td>
                <td><?= h($imagereviews->status) ?></td>
                <td><?= h($imagereviews->featured) ?></td>
                <td><?= h($imagereviews->created) ?></td>
                <td><?= h($imagereviews->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Imagereviews', 'action' => 'view', $imagereviews->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Imagereviews', 'action' => 'edit', $imagereviews->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Imagereviews', 'action' => 'delete', $imagereviews->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagereviews->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Likereviews') ?></h4>
        <?php if (!empty($review->likereviews)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Review Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($review->likereviews as $likereviews): ?>
            <tr>
                <td><?= h($likereviews->id) ?></td>
                <td><?= h($likereviews->user_id) ?></td>
                <td><?= h($likereviews->review_id) ?></td>
                <td><?= h($likereviews->created) ?></td>
                <td><?= h($likereviews->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Likereviews', 'action' => 'view', $likereviews->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Likereviews', 'action' => 'edit', $likereviews->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Likereviews', 'action' => 'delete', $likereviews->id], ['confirm' => __('Are you sure you want to delete # {0}?', $likereviews->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
