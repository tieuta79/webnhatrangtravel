<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Restaurants Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\RegionsTable|\Cake\ORM\Association\BelongsTo $Regions
 * @property \App\Model\Table\CommentsTable|\Cake\ORM\Association\HasMany $Comments
 * @property \App\Model\Table\FoodsTable|\Cake\ORM\Association\HasMany $Foods
 * @property \App\Model\Table\ImagerestaurantsTable|\Cake\ORM\Association\HasMany $Imagerestaurants
 * @property \App\Model\Table\WhishlistsTable|\Cake\ORM\Association\HasMany $Whishlists
 *
 * @method \App\Model\Entity\Restaurant get($primaryKey, $options = [])
 * @method \App\Model\Entity\Restaurant newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Restaurant[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Restaurant|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Restaurant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Restaurant[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Restaurant findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RestaurantsTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('restaurants');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('Regions', [
            'foreignKey' => 'region_id'
        ]);
        $this->belongsTo('Typerestaurants', [
            'foreignKey' => 'typerestaurant_id'
        ]);
        $this->hasMany('Comments', [
            'foreignKey' => 'restaurant_id'
        ]);
        $this->hasMany('Foods', [
            'foreignKey' => 'restaurant_id'
        ]);
        $this->hasMany('Imagerestaurants', [
            'foreignKey' => 'restaurant_id'
        ]);
        $this->hasMany('Raterestaurants', [
            'foreignKey' => 'restaurant_id'
        ]);
        $this->hasMany('Likerestaurants', [
            'foreignKey' => 'restaurant_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
                ->integer('id')
                ->allowEmpty('id', 'create');

        $validator
                ->allowEmpty('name');

        $validator
                ->allowEmpty('slug');

        $validator
                ->allowEmpty('image');

        $validator
                ->allowEmpty('address');

        $validator
                ->allowEmpty('latitude');

        $validator
                ->allowEmpty('longitude');

        $validator
                ->allowEmpty('descripton');

        $validator
                ->numeric('price')
                ->allowEmpty('price');

        $validator
                ->integer('view')
                ->allowEmpty('view');

        $validator
                ->allowEmpty('branch');

        $validator
                ->time('open')
                ->allowEmpty('open');

        $validator
                ->time('close')
                ->allowEmpty('close');

        $validator
                ->allowEmpty('web');

        $validator
                ->boolean('status')
                ->allowEmpty('status');

        $validator
                ->boolean('featured')
                ->allowEmpty('featured');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['region_id'], 'Regions'));
        $rules->add($rules->existsIn(['typerestaurant_id'], 'Typerestaurants'));
        return $rules;
    }

}
