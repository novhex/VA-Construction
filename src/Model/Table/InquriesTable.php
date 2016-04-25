<?php


namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class InquriesTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('name','Name is required')
            ->notEmpty('address')
            ->notEmpty('contact_no')
            ->notEmpty('inquiry_subject')
            ->notEmpty('details');

        return $validator;
    }
}