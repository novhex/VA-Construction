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
            ->notEmpty('supply_name')
            ->notEmpty('supply_description')
            ->notEmpty('supply_price');

        return $validator;
    }
}