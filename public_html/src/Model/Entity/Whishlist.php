<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Whishlist Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $hotel_id
 * @property int $restaurant_id
 * @property int $tour_id
 * @property int $vehicle_id
 * @property int $food_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Hotel $hotel
 * @property \App\Model\Entity\Restaurant $restaurant
 * @property \App\Model\Entity\Tour $tour
 * @property \App\Model\Entity\Vehicle $vehicle
 * @property \App\Model\Entity\Food $food
 */
class Whishlist extends Entity
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
