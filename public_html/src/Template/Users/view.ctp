<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User $user
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Typeusers'), ['controller' => 'Typeusers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typeuser'), ['controller' => 'Typeusers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Blackusers'), ['controller' => 'Blackusers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Blackuser'), ['controller' => 'Blackusers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Feedbacks'), ['controller' => 'Feedbacks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Feedback'), ['controller' => 'Feedbacks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Followers'), ['controller' => 'Followers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Follower'), ['controller' => 'Followers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Followings'), ['controller' => 'Followings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Following'), ['controller' => 'Followings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Restaurants'), ['controller' => 'Restaurants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Restaurant'), ['controller' => 'Restaurants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tours'), ['controller' => 'Tours', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tour'), ['controller' => 'Tours', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Whishlists'), ['controller' => 'Whishlists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Whishlist'), ['controller' => 'Whishlists', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Typeuser') ?></th>
            <td><?= $user->has('typeuser') ? $this->Html->link($user->typeuser->name, ['controller' => 'Typeusers', 'action' => 'view', $user->typeuser->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($user->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($user->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Icon') ?></th>
            <td><?= h($user->icon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Facebook') ?></th>
            <td><?= h($user->facebook) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Post') ?></th>
            <td><?= $this->Number->format($user->post) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthday') ?></th>
            <td><?= h($user->birthday) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sex') ?></th>
            <td><?= $user->sex ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($user->address)); ?>
    </div>
    <div class="row">
        <h4><?= __('Descripton') ?></h4>
        <?= $this->Text->autoParagraph(h($user->descripton)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Blackusers') ?></h4>
        <?php if (!empty($user->blackusers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Descripton') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->blackusers as $blackusers): ?>
            <tr>
                <td><?= h($blackusers->id) ?></td>
                <td><?= h($blackusers->user_id) ?></td>
                <td><?= h($blackusers->descripton) ?></td>
                <td><?= h($blackusers->created) ?></td>
                <td><?= h($blackusers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Blackusers', 'action' => 'view', $blackusers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Blackusers', 'action' => 'edit', $blackusers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Blackusers', 'action' => 'delete', $blackusers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blackusers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Comments') ?></h4>
        <?php if (!empty($user->comments)): ?>
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
            <?php foreach ($user->comments as $comments): ?>
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
        <h4><?= __('Related Events') ?></h4>
        <?php if (!empty($user->events)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Content') ?></th>
                <th scope="col"><?= __('Start') ?></th>
                <th scope="col"><?= __('End') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Featured') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->events as $events): ?>
            <tr>
                <td><?= h($events->id) ?></td>
                <td><?= h($events->user_id) ?></td>
                <td><?= h($events->title) ?></td>
                <td><?= h($events->slug) ?></td>
                <td><?= h($events->image) ?></td>
                <td><?= h($events->content) ?></td>
                <td><?= h($events->start) ?></td>
                <td><?= h($events->end) ?></td>
                <td><?= h($events->status) ?></td>
                <td><?= h($events->featured) ?></td>
                <td><?= h($events->created) ?></td>
                <td><?= h($events->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Events', 'action' => 'view', $events->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Events', 'action' => 'edit', $events->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Events', 'action' => 'delete', $events->id], ['confirm' => __('Are you sure you want to delete # {0}?', $events->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Feedbacks') ?></h4>
        <?php if (!empty($user->feedbacks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Descripton') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Featured') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->feedbacks as $feedbacks): ?>
            <tr>
                <td><?= h($feedbacks->id) ?></td>
                <td><?= h($feedbacks->user_id) ?></td>
                <td><?= h($feedbacks->descripton) ?></td>
                <td><?= h($feedbacks->status) ?></td>
                <td><?= h($feedbacks->featured) ?></td>
                <td><?= h($feedbacks->created) ?></td>
                <td><?= h($feedbacks->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Feedbacks', 'action' => 'view', $feedbacks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Feedbacks', 'action' => 'edit', $feedbacks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Feedbacks', 'action' => 'delete', $feedbacks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feedbacks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Followers') ?></h4>
        <?php if (!empty($user->followers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Follower Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->followers as $followers): ?>
            <tr>
                <td><?= h($followers->id) ?></td>
                <td><?= h($followers->follower_id) ?></td>
                <td><?= h($followers->user_id) ?></td>
                <td><?= h($followers->created) ?></td>
                <td><?= h($followers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Followers', 'action' => 'view', $followers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Followers', 'action' => 'edit', $followers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Followers', 'action' => 'delete', $followers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $followers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Followings') ?></h4>
        <?php if (!empty($user->followings)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Followings Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->followings as $followings): ?>
            <tr>
                <td><?= h($followings->id) ?></td>
                <td><?= h($followings->followings_id) ?></td>
                <td><?= h($followings->user_id) ?></td>
                <td><?= h($followings->created) ?></td>
                <td><?= h($followings->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Followings', 'action' => 'view', $followings->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Followings', 'action' => 'edit', $followings->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Followings', 'action' => 'delete', $followings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $followings->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Hotels') ?></h4>
        <?php if (!empty($user->hotels)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Region Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Descripton') ?></th>
                <th scope="col"><?= __('Standard') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Latitude') ?></th>
                <th scope="col"><?= __('Longitude') ?></th>
                <th scope="col"><?= __('View') ?></th>
                <th scope="col"><?= __('Open') ?></th>
                <th scope="col"><?= __('Close') ?></th>
                <th scope="col"><?= __('Web') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Featured') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->hotels as $hotels): ?>
            <tr>
                <td><?= h($hotels->id) ?></td>
                <td><?= h($hotels->user_id) ?></td>
                <td><?= h($hotels->region_id) ?></td>
                <td><?= h($hotels->name) ?></td>
                <td><?= h($hotels->slug) ?></td>
                <td><?= h($hotels->image) ?></td>
                <td><?= h($hotels->descripton) ?></td>
                <td><?= h($hotels->standard) ?></td>
                <td><?= h($hotels->address) ?></td>
                <td><?= h($hotels->latitude) ?></td>
                <td><?= h($hotels->longitude) ?></td>
                <td><?= h($hotels->view) ?></td>
                <td><?= h($hotels->open) ?></td>
                <td><?= h($hotels->close) ?></td>
                <td><?= h($hotels->web) ?></td>
                <td><?= h($hotels->status) ?></td>
                <td><?= h($hotels->featured) ?></td>
                <td><?= h($hotels->created) ?></td>
                <td><?= h($hotels->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Hotels', 'action' => 'view', $hotels->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Hotels', 'action' => 'edit', $hotels->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Hotels', 'action' => 'delete', $hotels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hotels->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Restaurants') ?></h4>
        <?php if (!empty($user->restaurants)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Region Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Latitude') ?></th>
                <th scope="col"><?= __('Longitude') ?></th>
                <th scope="col"><?= __('Descripton') ?></th>
                <th scope="col"><?= __('View') ?></th>
                <th scope="col"><?= __('Branch') ?></th>
                <th scope="col"><?= __('Open') ?></th>
                <th scope="col"><?= __('Close') ?></th>
                <th scope="col"><?= __('Web') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Featured') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->restaurants as $restaurants): ?>
            <tr>
                <td><?= h($restaurants->id) ?></td>
                <td><?= h($restaurants->user_id) ?></td>
                <td><?= h($restaurants->region_id) ?></td>
                <td><?= h($restaurants->name) ?></td>
                <td><?= h($restaurants->slug) ?></td>
                <td><?= h($restaurants->image) ?></td>
                <td><?= h($restaurants->address) ?></td>
                <td><?= h($restaurants->latitude) ?></td>
                <td><?= h($restaurants->longitude) ?></td>
                <td><?= h($restaurants->descripton) ?></td>
                <td><?= h($restaurants->view) ?></td>
                <td><?= h($restaurants->branch) ?></td>
                <td><?= h($restaurants->open) ?></td>
                <td><?= h($restaurants->close) ?></td>
                <td><?= h($restaurants->web) ?></td>
                <td><?= h($restaurants->status) ?></td>
                <td><?= h($restaurants->featured) ?></td>
                <td><?= h($restaurants->created) ?></td>
                <td><?= h($restaurants->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Restaurants', 'action' => 'view', $restaurants->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Restaurants', 'action' => 'edit', $restaurants->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Restaurants', 'action' => 'delete', $restaurants->id], ['confirm' => __('Are you sure you want to delete # {0}?', $restaurants->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tours') ?></h4>
        <?php if (!empty($user->tours)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Region Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Descripton') ?></th>
                <th scope="col"><?= __('Start') ?></th>
                <th scope="col"><?= __('End') ?></th>
                <th scope="col"><?= __('View') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Featured') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->tours as $tours): ?>
            <tr>
                <td><?= h($tours->id) ?></td>
                <td><?= h($tours->user_id) ?></td>
                <td><?= h($tours->region_id) ?></td>
                <td><?= h($tours->name) ?></td>
                <td><?= h($tours->slug) ?></td>
                <td><?= h($tours->image) ?></td>
                <td><?= h($tours->descripton) ?></td>
                <td><?= h($tours->start) ?></td>
                <td><?= h($tours->end) ?></td>
                <td><?= h($tours->view) ?></td>
                <td><?= h($tours->status) ?></td>
                <td><?= h($tours->featured) ?></td>
                <td><?= h($tours->created) ?></td>
                <td><?= h($tours->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tours', 'action' => 'view', $tours->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tours', 'action' => 'edit', $tours->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tours', 'action' => 'delete', $tours->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tours->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Vehicles') ?></h4>
        <?php if (!empty($user->vehicles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Typevehicle Id') ?></th>
                <th scope="col"><?= __('Region Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Descripton') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Featured') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->vehicles as $vehicles): ?>
            <tr>
                <td><?= h($vehicles->id) ?></td>
                <td><?= h($vehicles->user_id) ?></td>
                <td><?= h($vehicles->typevehicle_id) ?></td>
                <td><?= h($vehicles->region_id) ?></td>
                <td><?= h($vehicles->name) ?></td>
                <td><?= h($vehicles->slug) ?></td>
                <td><?= h($vehicles->image) ?></td>
                <td><?= h($vehicles->descripton) ?></td>
                <td><?= h($vehicles->status) ?></td>
                <td><?= h($vehicles->featured) ?></td>
                <td><?= h($vehicles->created) ?></td>
                <td><?= h($vehicles->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Vehicles', 'action' => 'view', $vehicles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Vehicles', 'action' => 'edit', $vehicles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Vehicles', 'action' => 'delete', $vehicles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Whishlists') ?></h4>
        <?php if (!empty($user->whishlists)): ?>
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
            <?php foreach ($user->whishlists as $whishlists): ?>
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
</div>
