<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Hotels Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\RegionsTable|\Cake\ORM\Association\BelongsTo $Regions
 * @property \App\Model\Table\CommentsTable|\Cake\ORM\Association\HasMany $Comments
 * @property \App\Model\Table\ImagehotelsTable|\Cake\ORM\Association\HasMany $Imagehotels
 * @property \App\Model\Table\RoomsTable|\Cake\ORM\Association\HasMany $Rooms
 * @property \App\Model\Table\WhishlistsTable|\Cake\ORM\Association\HasMany $Whishlists
 *
 * @method \App\Model\Entity\Hotel get($primaryKey, $options = [])
 * @method \App\Model\Entity\Hotel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Hotel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Hotel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hotel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Hotel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Hotel findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HotelsTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('hotels');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Sluggable');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('Regions', [
            'foreignKey' => 'region_id'
        ]);
        $this->belongsTo('Typehotels', [
            'foreignKey' => 'typehotel_id'
        ]);
        $this->hasMany('Likehotels', [
            'foreignKey' => 'hotel_id'
        ]);
        $this->hasMany('Imagehotels', [
            'foreignKey' => 'hotel_id'
        ]);
        $this->hasMany('Rooms', [
            'foreignKey' => 'hotel_id'
        ]);
        $this->hasMany('Ratehotels', [
            'foreignKey' => 'hotel_id'
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
                ->allowEmpty('descripton');

        $validator
                ->integer('standard')
                ->allowEmpty('standard');

        $validator
                ->numeric('price')
                ->allowEmpty('price');

        $validator
                ->allowEmpty('address');

        $validator
                ->allowEmpty('latitude');

        $validator
                ->allowEmpty('longitude');

        $validator
                ->integer('view')
                ->allowEmpty('view');

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
        $rules->add($rules->existsIn(['typehotel_id'], 'Typehotels'));

        return $rules;
    }

}
