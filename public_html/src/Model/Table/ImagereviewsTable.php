<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Imagereviews Model
 *
 * @property \App\Model\Table\ReviewsTable|\Cake\ORM\Association\BelongsTo $Reviews
 *
 * @method \App\Model\Entity\Imagereview get($primaryKey, $options = [])
 * @method \App\Model\Entity\Imagereview newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Imagereview[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Imagereview|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Imagereview patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Imagereview[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Imagereview findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ImagereviewsTable extends Table
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

        $this->setTable('imagereviews');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Reviews', [
            'foreignKey' => 'review_id'
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
            ->allowEmpty('image');

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
        $rules->add($rules->existsIn(['review_id'], 'Reviews'));

        return $rules;
    }
}
