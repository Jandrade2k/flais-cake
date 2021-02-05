<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Castings Model
 *
 * @method \App\Model\Entity\Casting newEmptyEntity()
 * @method \App\Model\Entity\Casting newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Casting[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Casting get($primaryKey, $options = [])
 * @method \App\Model\Entity\Casting findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Casting patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Casting[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Casting|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Casting saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Casting[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Casting[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Casting[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Casting[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CastingsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('castings');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('cpf')
            ->maxLength('cpf', 50)
            ->requirePresence('cpf', 'create')
            ->notEmptyString('cpf');

        $validator
            ->scalar('rg')
            ->maxLength('rg', 50)
            ->requirePresence('rg', 'create')
            ->notEmptyString('rg');

        $validator
            ->scalar('function')
            ->maxLength('function', 50)
            ->requirePresence('function', 'create')
            ->notEmptyString('function');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 50)
            ->requirePresence('gender', 'create')
            ->notEmptyString('gender');

        $validator
            ->scalar('shirt')
            ->maxLength('shirt', 50)
            ->requirePresence('shirt', 'create')
            ->notEmptyString('shirt');

        $validator
            ->scalar('vest')
            ->maxLength('vest', 50)
            ->requirePresence('vest', 'create')
            ->notEmptyString('vest');

        $validator
            ->scalar('blazer')
            ->maxLength('blazer', 50)
            ->requirePresence('blazer', 'create')
            ->notEmptyString('blazer');

        $validator
            ->scalar('gloves')
            ->maxLength('gloves', 50)
            ->requirePresence('gloves', 'create')
            ->notEmptyString('gloves');

        return $validator;
    }
}
