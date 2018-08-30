<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DiscountsFoods Model
 *
 * @property \App\Model\Table\FoodsTable|\Cake\ORM\Association\BelongsTo $Foods
 * @property \App\Model\Table\DiscountsTable|\Cake\ORM\Association\BelongsTo $Discounts
 *
 * @method \App\Model\Entity\DiscountsFood get($primaryKey, $options = [])
 * @method \App\Model\Entity\DiscountsFood newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DiscountsFood[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DiscountsFood|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DiscountsFood patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DiscountsFood[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DiscountsFood findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DiscountsFoodsTable extends Table
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

        $this->setTable('discounts_foods');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Foods', [
            'foreignKey' => 'food_id'
        ]);
        $this->belongsTo('Discounts', [
            'foreignKey' => 'discounts_id'
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
        $rules->add($rules->existsIn(['food_id'], 'Foods'));
        $rules->add($rules->existsIn(['discounts_id'], 'Discounts'));

        return $rules;
    }
}
