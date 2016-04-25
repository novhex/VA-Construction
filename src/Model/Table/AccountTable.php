<?php


namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class AccountTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('username')
            ->notEmpty('password');

        return $validator;
    }
}