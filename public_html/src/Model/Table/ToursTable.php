<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tours Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\RegionsTable|\Cake\ORM\Association\BelongsTo $Regions
 * @property \App\Model\Table\CommentsTable|\Cake\ORM\Association\HasMany $Comments
 * @property \App\Model\Table\DetailsTable|\Cake\ORM\Association\HasMany $Details
 * @property \App\Model\Table\ImagetoursTable|\Cake\ORM\Association\HasMany $Imagetours
 * @property \App\Model\Table\WhishlistsTable|\Cake\ORM\Association\HasMany $Whishlists
 *
 * @method \App\Model\Entity\Tour get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tour newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tour[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tour|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tour patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tour[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tour findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ToursTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('tours');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('Typetours', [
            'foreignKey' => 'typetour_id'
        ]);
        $this->belongsTo('Regions', [
            'foreignKey' => 'region_id'
        ]);
        $this->hasMany('Liketours', [
            'foreignKey' => 'tour_id'
        ]);
        $this->hasMany('Imagetours', [
            'foreignKey' => 'tour_id'
        ]);
        $this->hasMany('Ratetours', [
            'foreignKey' => 'tour_id'
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
                ->dateTime('start')
                ->allowEmpty('start');

        $validator
                ->dateTime('end')
                ->allowEmpty('end');

        $validator
                ->numeric('price')
                ->allowEmpty('price');

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

        return $rules;
    }

}
