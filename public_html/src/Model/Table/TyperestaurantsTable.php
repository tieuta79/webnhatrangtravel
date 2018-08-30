<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Typerestaurants Model
 *
 * @property \App\Model\Table\RestaurantsTable|\Cake\ORM\Association\HasMany $Restaurants
 *
 * @method \App\Model\Entity\Typerestaurant get($primaryKey, $options = [])
 * @method \App\Model\Entity\Typerestaurant newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Typerestaurant[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Typerestaurant|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Typerestaurant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Typerestaurant[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Typerestaurant findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TyperestaurantsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('typerestaurants');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Restaurants', [
            'foreignKey' => 'typerestaurant_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('name');

        $validator
            ->allowEmpty('slug');

        return $validator;
    }
}
