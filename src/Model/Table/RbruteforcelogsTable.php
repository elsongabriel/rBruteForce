<?php

namespace RBruteForce\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Rbruteforcelogs Model
 */
class RbruteforcelogsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->setTable('rbruteforcelogs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmptyString('id', 'ID allow empty string', 'create')
            ->allowEmptyString('data');

        return $validator;
    }

}
