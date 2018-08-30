<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Room Entity
 *
 * @property int $id
 * @property int $hotel_id
 * @property int $typeroom_id
 * @property string $name
 * @property string $slug
 * @property string $image
 * @property int $people
 * @property float $price
 * @property string $directions
 * @property string $acreage
 * @property int $bedroom
 * @property bool $bathroom
 * @property bool $smokingroom
 * @property bool $bathtub
 * @property bool $balcony
 * @property bool $wifi
 * @property bool $status
 * @property bool $featured
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Hotel $hotel
 * @property \App\Model\Entity\Typeroom $typeroom
 * @property \App\Model\Entity\Preferential[] $preferentials
 */
class Room extends Entity
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
