<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Restaurant Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $region_id
 * @property string $name
 * @property string $slug
 * @property string $image
 * @property string $address
 * @property string $latitude
 * @property string $longitude
 * @property string $descripton
 * @property int $view
 * @property string $branch
 * @property \Cake\I18n\FrozenTime $open
 * @property \Cake\I18n\FrozenTime $close
 * @property string $web
 * @property bool $status
 * @property bool $featured
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Region $region
 * @property \App\Model\Entity\Comment[] $comments
 * @property \App\Model\Entity\Food[] $foods
 * @property \App\Model\Entity\Imagerestaurant[] $imagerestaurants
 * @property \App\Model\Entity\Whishlist[] $whishlists
 */
class Restaurant extends Entity
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
