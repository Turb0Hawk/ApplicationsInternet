<?php


namespace App\Model\Table;


use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categories Model
 *
 * @property \App\Model\Table\ModelsTable&\Cake\ORM\Association\HasMany $Models
 *
 * @method \App\Model\Entity\Make get($primaryKey, $options = [])
 * @method \App\Model\Entity\Make newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Make[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Make|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Make saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Make patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Make[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Make findOrCreate($search, callable $callback = null, $options = [])
 */
class MakesTable extends Table
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

        $this->setTable('makes');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Models', [
            'foreignKey' => 'make_id'
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
            ->scalar('name')
            ->maxLength('name', 60)
            ->allowEmptyString('name');

        return $validator;
    }
}
