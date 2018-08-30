<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Review Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $event_id
 * @property int $hotel_id
 * @property int $place_id
 * @property int $restaurant_id
 * @property int $tour_id
 * @property int $vehicle_id
 * @property string $name
 * @property string $slug
 * @property string $image
 * @property bool $status
 * @property bool $featured
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Event $event
 * @property \App\Model\Entity\Hotel $hotel
 * @property \App\Model\Entity\Place $place
 * @property \App\Model\Entity\Restaurant $restaurant
 * @property \App\Model\Entity\Tour $tour
 * @property \App\Model\Entity\Vehicle $vehicle
 * @property \App\Model\Entity\Comment[] $comments
 * @property \App\Model\Entity\Imagereview[] $imagereviews
 * @property \App\Model\Entity\Likereview[] $likereviews
 */
class Review extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
