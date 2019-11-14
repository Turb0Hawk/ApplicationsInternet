<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cars Model
 *
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\CoursesTable&\Cake\ORM\Association\HasMany $Courses
 *
 * @method \App\Model\Entity\Car get($primaryKey, $options = [])
 * @method \App\Model\Entity\Car newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Car[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Car|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Car saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Car patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Car[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Car findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CarsTable extends Table
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

        $this->setTable('cars');
        $this->setDisplayField('FullName');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Courses', [
            'foreignKey' => 'car_id'
        ]);

        $this->belongsToMany('Files', [
            'foreignKey' => 'car_id',
            'targetForeignKey' => 'file_id',
            'joinTable' => 'cars_files'
        ]);

        $this->belongsToMany('Customers', [
            'foreignKey' => 'car_id',
            'targetForeignKey' => 'customer_id',
            'joinTable' => 'cars_customers'
        ]);

        $this->belongsTo('Models', [
            'foreignKey' => 'model_id'
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('make')
            ->maxLength('make', 255)
            ->requirePresence('make', 'create')
            ->notEmptyString('make');

        $validator
            ->scalar('model')
            ->maxLength('model', 255)
            ->requirePresence('model', 'create')
            ->notEmptyString('model');

        $validator
            ->scalar('trim')
            ->maxLength('trim', 50)
            ->allowEmptyString('trim');

        $validator
            ->scalar('transmission')
            ->maxLength('transmission', 10)
            ->allowEmptyString('transmission');

        $validator
            ->scalar('drivetrain')
            ->maxLength('drivetrain', 3)
            ->allowEmptyString('drivetrain');

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
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));

        return $rules;
    }
}
