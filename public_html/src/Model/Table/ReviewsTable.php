<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Reviews Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\EventsTable|\Cake\ORM\Association\BelongsTo $Events
 * @property \App\Model\Table\HotelsTable|\Cake\ORM\Association\BelongsTo $Hotels
 * @property \App\Model\Table\PlacesTable|\Cake\ORM\Association\BelongsTo $Places
 * @property \App\Model\Table\RestaurantsTable|\Cake\ORM\Association\BelongsTo $Restaurants
 * @property \App\Model\Table\ToursTable|\Cake\ORM\Association\BelongsTo $Tours
 * @property \App\Model\Table\VehiclesTable|\Cake\ORM\Association\BelongsTo $Vehicles
 * @property \App\Model\Table\CommentsTable|\Cake\ORM\Association\HasMany $Comments
 * @property \App\Model\Table\ImagereviewsTable|\Cake\ORM\Association\HasMany $Imagereviews
 * @property \App\Model\Table\LikereviewsTable|\Cake\ORM\Association\HasMany $Likereviews
 *
 * @method \App\Model\Entity\Review get($primaryKey, $options = [])
 * @method \App\Model\Entity\Review newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Review[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Review|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Review patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Review[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Review findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ReviewsTable extends Table
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

        $this->setTable('reviews');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Comments', [
            'foreignKey' => 'review_id'
        ]);
        $this->hasMany('Imagereviews', [
            'foreignKey' => 'review_id'
        ]);
        $this->hasMany('Likereviews', [
            'foreignKey' => 'review_id'
        ]);
        $this->belongsTo('Typereviews', [
            'foreignKey' => 'typereview_id'
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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['typereview_id'], 'Typereviews'));

        return $rules;
    }
}
