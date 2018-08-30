<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property int $typeuser_id
 * @property string $username
 * @property string $password
 * @property string $image
 * @property string $email
 * @property string $name
 * @property string $address
 * @property string $phone
 * @property bool $sex
 * @property string $icon
 * @property int $post
 * @property string $facebook
 * @property string $descripton
 * @property \Cake\I18n\FrozenTime $birthday
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Typeuser $typeuser
 * @property \App\Model\Entity\Blackuser[] $blackusers
 * @property \App\Model\Entity\Comment[] $comments
 * @property \App\Model\Entity\Event[] $events
 * @property \App\Model\Entity\Feedback[] $feedbacks
 * @property \App\Model\Entity\Follower[] $followers
 * @property \App\Model\Entity\Following[] $followings
 * @property \App\Model\Entity\Hotel[] $hotels
 * @property \App\Model\Entity\Restaurant[] $restaurants
 * @property \App\Model\Entity\Tour[] $tours
 * @property \App\Model\Entity\Vehicle[] $vehicles
 * @property \App\Model\Entity\Whishlist[] $whishlists
 */
class User extends Entity
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

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
