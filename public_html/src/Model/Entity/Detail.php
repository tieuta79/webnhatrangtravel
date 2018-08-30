<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Detail Entity
 *
 * @property int $id
 * @property int $plan_id
 * @property int $place_id
 * @property \Cake\I18n\FrozenTime $timevisit
 * @property \Cake\I18n\FrozenTime $timemove
 * @property \Cake\I18n\FrozenDate $date
 * @property string $note
 * @property bool $status
 * @property bool $featured
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Plan $plan
 * @property \App\Model\Entity\Place $place
 */
class Detail extends Entity
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
