<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Typehotels Model
 *
 * @property \App\Model\Table\HotelsTable|\Cake\ORM\Association\HasMany $Hotels
 *
 * @method \App\Model\Entity\Typehotel get($primaryKey, $options = [])
 * @method \App\Model\Entity\Typehotel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Typehotel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Typehotel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Typehotel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Typehotel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Typehotel findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TypehotelsTable extends Table
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

        $this->setTable('typehotels');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Hotels', [
            'foreignKey' => 'typehotel_id'
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
