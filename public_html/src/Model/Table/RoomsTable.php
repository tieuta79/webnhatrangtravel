<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Rooms Model
 *
 * @property \App\Model\Table\HotelsTable|\Cake\ORM\Association\BelongsTo $Hotels
 * @property \App\Model\Table\TyperoomsTable|\Cake\ORM\Association\BelongsTo $Typerooms
 * @property \App\Model\Table\PreferentialsTable|\Cake\ORM\Association\HasMany $Preferentials
 *
 * @method \App\Model\Entity\Room get($primaryKey, $options = [])
 * @method \App\Model\Entity\Room newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Room[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Room|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Room patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Room[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Room findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RoomsTable extends Table
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

        $this->setTable('rooms');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Hotels', [
            'foreignKey' => 'hotel_id'
        ]);
        $this->belongsTo('Typerooms', [
            'foreignKey' => 'typeroom_id'
        ]);
        $this->hasMany('Preferentials', [
            'foreignKey' => 'room_id'
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

        $validator
            ->allowEmpty('image');

        $validator
            ->integer('people')
            ->allowEmpty('people');

        $validator
            ->numeric('price')
            ->allowEmpty('price');

        $validator
            ->allowEmpty('directions');

        $validator
            ->allowEmpty('acreage');

        $validator
            ->integer('bedroom')
            ->allowEmpty('bedroom');

        $validator
            ->boolean('bathroom')
            ->allowEmpty('bathroom');

        $validator
            ->boolean('smokingroom')
            ->allowEmpty('smokingroom');

        $validator
            ->boolean('bathtub')
            ->allowEmpty('bathtub');

        $validator
            ->boolean('balcony')
            ->allowEmpty('balcony');

        $validator
            ->boolean('wifi')
            ->allowEmpty('wifi');

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
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['hotel_id'], 'Hotels'));
        $rules->add($rules->existsIn(['typeroom_id'], 'Typerooms'));

        return $rules;
    }
}
