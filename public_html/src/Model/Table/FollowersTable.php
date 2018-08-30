<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Followers Model
 *
 * @property \App\Model\Table\FollowersTable|\Cake\ORM\Association\BelongsTo $Followers
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\FollowersTable|\Cake\ORM\Association\HasMany $Followers
 *
 * @method \App\Model\Entity\Follower get($primaryKey, $options = [])
 * @method \App\Model\Entity\Follower newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Follower[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Follower|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Follower patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Follower[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Follower findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FollowersTable extends Table
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

        $this->setTable('followers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Followers', [
            'foreignKey' => 'follower_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Followers', [
            'foreignKey' => 'follower_id'
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
        $rules->add($rules->existsIn(['follower_id'], 'Followers'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
