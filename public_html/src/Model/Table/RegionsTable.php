<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Regions Model
 *
 * @property \App\Model\Table\ProvincesTable|\Cake\ORM\Association\BelongsTo $Provinces
 * @property \App\Model\Table\HotelsTable|\Cake\ORM\Association\HasMany $Hotels
 * @property \App\Model\Table\ImageregionsTable|\Cake\ORM\Association\HasMany $Imageregions
 * @property \App\Model\Table\PlacesTable|\Cake\ORM\Association\HasMany $Places
 * @property \App\Model\Table\RestaurantsTable|\Cake\ORM\Association\HasMany $Restaurants
 * @property \App\Model\Table\ToursTable|\Cake\ORM\Association\HasMany $Tours
 * @property \App\Model\Table\VehiclesTable|\Cake\ORM\Association\HasMany $Vehicles
 *
 * @method \App\Model\Entity\Region get($primaryKey, $options = [])
 * @method \App\Model\Entity\Region newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Region[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Region|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Region patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Region[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Region findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RegionsTable extends Table
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

        $this->setTable('regions');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Sluggable');
        $this->addBehavior('UploadsRegions', [
            'fields' => ['image']
        ]);

        $this->belongsTo('Provinces', [
            'foreignKey' => 'province_id'
        ]);
        $this->hasMany('Hotels', [
            'foreignKey' => 'region_id'
        ]);
        $this->hasMany('Imageregions', [
            'foreignKey' => 'region_id'
        ]);
        $this->hasMany('Places', [
            'foreignKey' => 'region_id'
        ]);
        $this->hasMany('Restaurants', [
            'foreignKey' => 'region_id'
        ]);
        $this->hasMany('Tours', [
            'foreignKey' => 'region_id'
        ]);
        $this->hasMany('Vehicles', [
            'foreignKey' => 'region_id'
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
            ->allowEmpty('descripton');

        $validator
            ->allowEmpty('latitude');

        $validator
            ->allowEmpty('longitude');
        
        $validator
                ->requirePresence('image', 'create')
                ->add('image', 'validFormat', [
                    'rule' => ['custom', '([^\s]+(\.(?i)(jpg|png|jpeg|gif))$)'],
                    'message' => __('These files extension are allowed: .png, .jpg, .jpeg, .gif')
        ]);

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
        $rules->add($rules->existsIn(['province_id'], 'Provinces'));

        return $rules;
    }
}
