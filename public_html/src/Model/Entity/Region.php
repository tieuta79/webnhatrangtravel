<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Region Entity
 *
 * @property int $id
 * @property int $province_id
 * @property string $name
 * @property string $slug
 * @property string $image
 * @property string $descripton
 * @property string $latitude
 * @property string $longitude
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Province $province
 * @property \App\Model\Entity\Hotel[] $hotels
 * @property \App\Model\Entity\Imageregion[] $imageregions
 * @property \App\Model\Entity\Place[] $places
 * @property \App\Model\Entity\Restaurant[] $restaurants
 * @property \App\Model\Entity\Tour[] $tours
 * @property \App\Model\Entity\Vehicle[] $vehicles
 */
class Region extends Entity
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
