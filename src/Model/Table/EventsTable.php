<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Events Model
 *
 * @property \App\Model\Table\EventsTiposTable&\Cake\ORM\Association\BelongsTo $EventsTipos
 * @property \App\Model\Table\ProposalTable&\Cake\ORM\Association\BelongsTo $Proposal
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\VodkasTable&\Cake\ORM\Association\BelongsTo $Vodkas
 * @property \App\Model\Table\WhiskiesTable&\Cake\ORM\Association\BelongsTo $Whiskies
 * @property \App\Model\Table\GinsTable&\Cake\ORM\Association\BelongsTo $Gins
 * @property \App\Model\Table\AperolsTable&\Cake\ORM\Association\BelongsTo $Aperols
 * @property \App\Model\Table\VinhosTable&\Cake\ORM\Association\BelongsTo $Vinhos
 * @property \App\Model\Table\EspumantesTable&\Cake\ORM\Association\BelongsTo $Espumantes
 * @property \App\Model\Table\UnitsTable&\Cake\ORM\Association\BelongsTo $Units
 * @property \App\Model\Table\TonicasTable&\Cake\ORM\Association\BelongsTo $Tonicas
 * @property \App\Model\Table\AguasTable&\Cake\ORM\Association\BelongsTo $Aguas
 * @property \App\Model\Table\CocosTable&\Cake\ORM\Association\BelongsTo $Cocos
 * @property \App\Model\Table\SaquesTable&\Cake\ORM\Association\BelongsTo $Saques
 * @property \App\Model\Table\RunsTable&\Cake\ORM\Association\BelongsTo $Runs
 * @property \App\Model\Table\CachacasTable&\Cake\ORM\Association\BelongsTo $Cachacas
 *
 * @method \App\Model\Entity\Event newEmptyEntity()
 * @method \App\Model\Entity\Event newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Event[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Event get($primaryKey, $options = [])
 * @method \App\Model\Entity\Event findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Event patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Event[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Event|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Event saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Event[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Event[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Event[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Event[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EventsTable extends Table
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

        $this->setTable('events');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('EventsTipos', [
            'foreignKey' => 'tipo_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Proposal', [
            'foreignKey' => 'porposal_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Vodkas', [
            'foreignKey' => 'vodka_id',
        ]);
        $this->belongsTo('Whiskies', [
            'foreignKey' => 'whisky_id',
        ]);
        $this->belongsTo('Gins', [
            'foreignKey' => 'gin_id',
        ]);
        $this->belongsTo('Aperols', [
            'foreignKey' => 'aperol_id',
        ]);
        $this->belongsTo('Vinhos', [
            'foreignKey' => 'vinho_id',
        ]);
        $this->belongsTo('Espumantes', [
            'foreignKey' => 'espumante_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Units', [
            'foreignKey' => 'unit_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Tonicas', [
            'foreignKey' => 'tonica_id',
        ]);
        $this->belongsTo('Aguas', [
            'foreignKey' => 'agua_id',
        ]);
        $this->belongsTo('Cocos', [
            'foreignKey' => 'coco_id',
        ]);
        $this->belongsTo('Saques', [
            'foreignKey' => 'saque_id',
        ]);
        $this->belongsTo('Runs', [
            'foreignKey' => 'run_id',
        ]);
        $this->belongsTo('Cachacas', [
            'foreignKey' => 'cachaca_id',
        ]);
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
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('event_date')
            ->maxLength('event_date', 50)
            ->notEmptyString('event_date');

        $validator
            ->scalar('portion_date')
            ->maxLength('portion_date', 50)
            ->notEmptyString('portion_date');

        $validator
            ->integer('qtd_guests')
            ->allowEmptyString('qtd_guests');

        $validator
            ->integer('hours')
            ->requirePresence('hours', 'create')
            ->notEmptyString('hours');

        $validator
            ->scalar('price_van')
            ->maxLength('price_van', 50)
            ->allowEmptyString('price_van');

        $validator
            ->scalar('price_hotel')
            ->maxLength('price_hotel', 50)
            ->allowEmptyString('price_hotel');

        $validator
            ->scalar('price_food')
            ->maxLength('price_food', 50)
            ->allowEmptyString('price_food');

        $validator
            ->scalar('distance')
            ->maxLength('distance', 50)
            ->allowEmptyString('distance');

        $validator
            ->boolean('bv')
            ->allowEmptyString('bv');

        $validator
            ->boolean('royalts')
            ->allowEmptyString('royalts');

        $validator
            ->scalar('creation_expense')
            ->maxLength('creation_expense', 50)
            ->allowEmptyString('creation_expense');

        $validator
            ->scalar('payment_method')
            ->maxLength('payment_method', 255)
            ->allowEmptyString('payment_method');

        $validator
            ->integer('qtd_bar')
            ->requirePresence('qtd_bar', 'create')
            ->notEmptyString('qtd_bar');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        $validator
            ->dateTime('created_at')
            ->requirePresence('created_at', 'create')
            ->notEmptyDateTime('created_at');

        $validator
            ->dateTime('updated_at')
            ->requirePresence('updated_at', 'create')
            ->notEmptyDateTime('updated_at');

        $validator
            ->numeric('drinks_guests')
            ->allowEmptyString('drinks_guests');

        $validator
            ->integer('bi')
            ->notEmptyString('bi');

        $validator
            ->scalar('address')
            ->maxLength('address', 50)
            ->allowEmptyString('address');

        $validator
            ->scalar('city')
            ->maxLength('city', 50)
            ->allowEmptyString('city');

        $validator
            ->scalar('color')
            ->maxLength('color', 50)
            ->requirePresence('color', 'create')
            ->notEmptyString('color');

        $validator
            ->integer('inicio')
            ->allowEmptyString('inicio');

        $validator
            ->integer('turno')
            ->allowEmptyString('turno');

        $validator
            ->scalar('local')
            ->maxLength('local', 50)
            ->allowEmptyString('local');

        $validator
            ->integer('sexual')
            ->allowEmptyString('sexual');

        $validator
            ->integer('cerveja')
            ->allowEmptyString('cerveja');

        $validator
            ->integer('spots')
            ->allowEmptyString('spots');

        $validator
            ->integer('criacao')
            ->allowEmptyString('criacao');

        $validator
            ->integer('preferido')
            ->allowEmptyString('preferido');

        $validator
            ->integer('personalizado')
            ->allowEmptyString('personalizado');

        $validator
            ->integer('gelo_diamante')
            ->allowEmptyString('gelo_diamante');

        $validator
            ->integer('gelo_esfera')
            ->allowEmptyString('gelo_esfera');

        $validator
            ->integer('gelo_cubo')
            ->allowEmptyString('gelo_cubo');

        $validator
            ->integer('gelo_personalizado')
            ->allowEmptyString('gelo_personalizado');

        $validator
            ->integer('gelo_flower')
            ->allowEmptyString('gelo_flower');

        $validator
            ->scalar('provisionado')
            ->maxLength('provisionado', 50)
            ->allowEmptyString('provisionado');

        $validator
            ->scalar('sugerido')
            ->maxLength('sugerido', 50)
            ->allowEmptyString('sugerido');

        $validator
            ->scalar('receitapb')
            ->maxLength('receitapb', 50)
            ->allowEmptyString('receitapb');

        $validator
            ->scalar('receitapi')
            ->maxLength('receitapi', 50)
            ->allowEmptyString('receitapi');

        $validator
            ->integer('etaria')
            ->allowEmptyString('etaria');

        $validator
            ->scalar('classe')
            ->maxLength('classe', 50)
            ->allowEmptyString('classe');

        $validator
            ->integer('aperitivo1')
            ->allowEmptyString('aperitivo1');

        $validator
            ->integer('aperitivo2')
            ->allowEmptyString('aperitivo2');

        $validator
            ->integer('aperitivo3')
            ->allowEmptyString('aperitivo3');

        $validator
            ->integer('aperitivo4')
            ->allowEmptyString('aperitivo4');

        $validator
            ->integer('aperitivo5')
            ->allowEmptyString('aperitivo5');

        $validator
            ->scalar('casting_people')
            ->allowEmptyString('casting_people');

        $validator
            ->scalar('casting_uniform')
            ->allowEmptyString('casting_uniform');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['tipo_id'], 'EventsTipos'), ['errorField' => 'tipo_id']);
        $rules->add($rules->existsIn(['porposal_id'], 'Proposal'), ['errorField' => 'porposal_id']);
        $rules->add($rules->existsIn(['customer_id'], 'Customers'), ['errorField' => 'customer_id']);
        // $rules->add($rules->existsIn(['vodka_id'], 'Vodkas'), ['errorField' => 'vodka_id']);
        // $rules->add($rules->existsIn(['whisky_id'], 'Whiskies'), ['errorField' => 'whisky_id']);
        // $rules->add($rules->existsIn(['gin_id'], 'Gins'), ['errorField' => 'gin_id']);
        // $rules->add($rules->existsIn(['aperol_id'], 'Aperols'), ['errorField' => 'aperol_id']);
        // $rules->add($rules->existsIn(['vinho_id'], 'Vinhos'), ['errorField' => 'vinho_id']);
        // $rules->add($rules->existsIn(['espumante_id'], 'Espumantes'), ['errorField' => 'espumante_id']);
        // $rules->add($rules->existsIn(['unit_id'], 'Units'), ['errorField' => 'unit_id']);
        // $rules->add($rules->existsIn(['tonica_id'], 'Tonicas'), ['errorField' => 'tonica_id']);
        // $rules->add($rules->existsIn(['agua_id'], 'Aguas'), ['errorField' => 'agua_id']);
        // $rules->add($rules->existsIn(['coco_id'], 'Cocos'), ['errorField' => 'coco_id']);
        // $rules->add($rules->existsIn(['saque_id'], 'Saques'), ['errorField' => 'saque_id']);
        // $rules->add($rules->existsIn(['run_id'], 'Runs'), ['errorField' => 'run_id']);
        // $rules->add($rules->existsIn(['cachaca_id'], 'Cachacas'), ['errorField' => 'cachaca_id']);

        return $rules;
    }
}
