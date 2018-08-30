<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\TypeusersTable|\Cake\ORM\Association\BelongsTo $Typeusers
 * @property \App\Model\Table\BlackusersTable|\Cake\ORM\Association\HasMany $Blackusers
 * @property \App\Model\Table\CommentsTable|\Cake\ORM\Association\HasMany $Comments
 * @property \App\Model\Table\EventsTable|\Cake\ORM\Association\HasMany $Events
 * @property \App\Model\Table\FeedbacksTable|\Cake\ORM\Association\HasMany $Feedbacks
 * @property \App\Model\Table\FollowersTable|\Cake\ORM\Association\HasMany $Followers
 * @property \App\Model\Table\FollowingsTable|\Cake\ORM\Association\HasMany $Followings
 * @property \App\Model\Table\HotelsTable|\Cake\ORM\Association\HasMany $Hotels
 * @property \App\Model\Table\RestaurantsTable|\Cake\ORM\Association\HasMany $Restaurants
 * @property \App\Model\Table\ToursTable|\Cake\ORM\Association\HasMany $Tours
 * @property \App\Model\Table\VehiclesTable|\Cake\ORM\Association\HasMany $Vehicles
 * @property \App\Model\Table\WhishlistsTable|\Cake\ORM\Association\HasMany $Whishlists
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Typeusers', [
            'foreignKey' => 'typeuser_id'
        ]);
        $this->hasMany('Comments', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Events', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Feedbacks', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Followers', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Followings', [
            'className' => 'Followings',
            'foreignKey' => 'followings_id'
        ]);
        $this->hasMany('Followings_user', [
            'className' => 'Followings',
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Hotels', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Places', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Restaurants', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Tours', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Plans', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Vehicles', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Reviews', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Likehotels', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Likeplaces', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Likerestaurants', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Likeevents', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Liketours', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Likevehicles', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Messages_from', [
            'className' => 'Messages',
            'foreignKey' => 'user_from'
        ]);
        $this->hasMany('Messages_to', [
            'className' => 'Messages',
            'foreignKey' => 'user_to'
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
                ->allowEmpty('username');

        $validator
                ->allowEmpty('password');

        $validator
                ->allowEmpty('image');

        $validator
                ->allowEmpty('cover');

        $validator
                ->email('email')
                ->allowEmpty('email');

        $validator
                ->allowEmpty('name');

        $validator
                ->allowEmpty('address');

        $validator
                ->allowEmpty('phone');

        $validator
                ->boolean('sex')
                ->allowEmpty('sex');

        $validator
                ->allowEmpty('facebook');

        $validator
                ->allowEmpty('descripton');

        $validator
                ->dateTime('birthday')
                ->allowEmpty('birthday');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['typeuser_id'], 'Typeusers'));

        return $rules;
    }

}
