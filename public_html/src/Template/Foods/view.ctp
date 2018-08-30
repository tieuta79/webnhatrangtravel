<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Food $food
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Food'), ['action' => 'edit', $food->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Food'), ['action' => 'delete', $food->id], ['confirm' => __('Are you sure you want to delete # {0}?', $food->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Foods'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Food'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Restaurants'), ['controller' => 'Restaurants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Restaurant'), ['controller' => 'Restaurants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Typefoods'), ['controller' => 'Typefoods', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typefood'), ['controller' => 'Typefoods', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Whishlists'), ['controller' => 'Whishlists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Whishlist'), ['controller' => 'Whishlists', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Discounts'), ['controller' => 'Discounts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Discount'), ['controller' => 'Discounts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="foods view large-9 medium-8 columns content">
    <h3><?= h($food->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Restaurant') ?></th>
            <td><?= $food->has('restaurant') ? $this->Html->link($food->restaurant->name, ['controller' => 'Restaurants', 'action' => 'view', $food->restaurant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Typefood') ?></th>
            <td><?= $food->has('typefood') ? $this->Html->link($food->typefood->name, ['controller' => 'Typefoods', 'action' => 'view', $food->typefood->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($food->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($food->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($food->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($food->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($food->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($food->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($food->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $food->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Featured') ?></th>
            <td><?= $food->featured ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Comments') ?></h4>
        <?php if (!empty($food->comments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Tour Id') ?></th>
                <th scope="col"><?= __('Vehicle Id') ?></th>
                <th scope="col"><?= __('Hotel Id') ?></th>
                <th scope="col"><?= __('Food Id') ?></th>
                <th scope="col"><?= __('Place Id') ?></th>
                <th scope="col"><?= __('Restaurant Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Content') ?></th>
                <th scope="col"><?= __('Point') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Featured') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($food->comments as $comments): ?>
            <tr>
                <td><?= h($comments->id) ?></td>
                <td><?= h($comments->user_id) ?></td>
                <td><?= h($comments->tour_id) ?></td>
                <td><?= h($comments->vehicle_id) ?></td>
                <td><?= h($comments->hotel_id) ?></td>
                <td><?= h($comments->food_id) ?></td>
                <td><?= h($comments->place_id) ?></td>
                <td><?= h($comments->restaurant_id) ?></td>
                <td><?= h($comments->title) ?></td>
                <td><?= h($comments->content) ?></td>
                <td><?= h($comments->point) ?></td>
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
        <h4><?= __('Related Whishlists') ?></h4>
        <?php if (!empty($food->whishlists)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Hotel Id') ?></th>
                <th scope="col"><?= __('Restaurant Id') ?></th>
                <th scope="col"><?= __('Tour Id') ?></th>
                <th scope="col"><?= __('Vehicle Id') ?></th>
                <th scope="col"><?= __('Food Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($food->whishlists as $whishlists): ?>
            <tr>
                <td><?= h($whishlists->id) ?></td>
                <td><?= h($whishlists->user_id) ?></td>
                <td><?= h($whishlists->hotel_id) ?></td>
                <td><?= h($whishlists->restaurant_id) ?></td>
                <td><?= h($whishlists->tour_id) ?></td>
                <td><?= h($whishlists->vehicle_id) ?></td>
                <td><?= h($whishlists->food_id) ?></td>
                <td><?= h($whishlists->created) ?></td>
                <td><?= h($whishlists->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Whishlists', 'action' => 'view', $whishlists->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Whishlists', 'action' => 'edit', $whishlists->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Whishlists', 'action' => 'delete', $whishlists->id], ['confirm' => __('Are you sure you want to delete # {0}?', $whishlists->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Discounts') ?></h4>
        <?php if (!empty($food->discounts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Start') ?></th>
                <th scope="col"><?= __('End') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Featured') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($food->discounts as $discounts): ?>
            <tr>
                <td><?= h($discounts->id) ?></td>
                <td><?= h($discounts->name) ?></td>
                <td><?= h($discounts->start) ?></td>
                <td><?= h($discounts->end) ?></td>
                <td><?= h($discounts->status) ?></td>
                <td><?= h($discounts->featured) ?></td>
                <td><?= h($discounts->created) ?></td>
                <td><?= h($discounts->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Discounts', 'action' => 'view', $discounts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Discounts', 'action' => 'edit', $discounts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Discounts', 'action' => 'delete', $discounts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discounts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
