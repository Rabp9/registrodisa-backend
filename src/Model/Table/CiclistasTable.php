<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ciclistas Model
 *
 * @method \App\Model\Entity\Ciclista get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ciclista newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ciclista[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ciclista|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ciclista patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ciclista[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ciclista findOrCreate($search, callable $callback = null, $options = [])
 */
class CiclistasTable extends Table
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

        $this->setTable('ciclistas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('nombres')
            ->requirePresence('nombres', 'create')
            ->notEmpty('nombres');

        $validator
            ->scalar('apellido_paterno')
            ->requirePresence('apellido_paterno', 'create')
            ->notEmpty('apellido_paterno');

        $validator
            ->scalar('apellido_materno')
            ->requirePresence('apellido_materno', 'create')
            ->notEmpty('apellido_materno');

        $validator
            ->scalar('dni')
            ->requirePresence('dni', 'create')
            ->notEmpty('dni');

        $validator
            ->date('fecha_nac')
            ->allowEmpty('fecha_nac');

        $validator
            ->scalar('direccion')
            ->allowEmpty('direccion');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->scalar('telefono')
            ->allowEmpty('telefono');

        $validator
            ->scalar('perteneces_grupo')
            ->allowEmpty('perteneces_grupo');

        $validator
            ->scalar('grupo')
            ->allowEmpty('grupo');

        $validator
            ->scalar('tipo1')
            ->allowEmpty('tipo1');

        $validator
            ->scalar('tipo2')
            ->allowEmpty('tipo2');

        $validator
            ->scalar('tipo3')
            ->allowEmpty('tipo3');

        $validator
            ->scalar('tipo4')
            ->allowEmpty('tipo4');

        $validator
            ->scalar('tipo5')
            ->allowEmpty('tipo5');

        $validator
            ->scalar('tipo6')
            ->allowEmpty('tipo6');

        $validator
            ->scalar('tipo7')
            ->allowEmpty('tipo7');

        $validator
            ->scalar('tipo8')
            ->allowEmpty('tipo8');

        $validator
            ->scalar('tipo9')
            ->allowEmpty('tipo9');

        $validator
            ->scalar('tipo10')
            ->allowEmpty('tipo10');

        $validator
            ->scalar('tipo11')
            ->allowEmpty('tipo11');

        $validator
            ->scalar('tipo12')
            ->allowEmpty('tipo12');

        $validator
            ->scalar('tipo13')
            ->allowEmpty('tipo13');

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
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
