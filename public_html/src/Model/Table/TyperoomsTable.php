<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Typerooms Model
 *
 * @property \App\Model\Table\RoomsTable|\Cake\ORM\Association\HasMany $Rooms
 *
 * @method \App\Model\Entity\Typeroom get($primaryKey, $options = [])
 * @method \App\Model\Entity\Typeroom newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Typeroom[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Typeroom|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Typeroom patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Typeroom[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Typeroom findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TyperoomsTable extends Table
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

        $this->setTable('typerooms');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Rooms', [
            'foreignKey' => 'typeroom_id'
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

        return $validator;
    }
}
