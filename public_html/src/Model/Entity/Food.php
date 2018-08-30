<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Food Entity
 *
 * @property int $id
 * @property int $restaurant_id
 * @property int $typefood_id
 * @property string $name
 * @property string $slug
 * @property string $image
 * @property float $price
 * @property bool $status
 * @property bool $featured
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Restaurant $restaurant
 * @property \App\Model\Entity\Typefood $typefood
 * @property \App\Model\Entity\Comment[] $comments
 * @property \App\Model\Entity\Whishlist[] $whishlists
 * @property \App\Model\Entity\Discount[] $discounts
 */
class Food extends Entity
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
