<?php


namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;


class SuppliesTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
        ->notEmpty('supply_description')
        ->notEmpty('supply_price')
        ->notEmpty('supply_qty')->add('supply_qty', 'validFormat',['rule' => array('custom', '/^[0-9 ]+$/'),'message' => 'Please enter a valid  number.'])
        ->requirePresence('supply_name')->add('supply_name', 'length',[ 'rule' => ['minLength', 5], 'message' => 'Supply name must be 1 characters or more', ]);


        return $validator;
    }
}