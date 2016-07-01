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
            ->notEmpty('name')->add('name', 'length',[ 'rule' => ['minLength', 2], 'message' => 'Name must be 2 characters or more', ])
            ->notEmpty('address')
            ->notEmpty('contact_no') ->add('contact_no', 'validFormat',['rule' => array('custom', '/^[0-9 ]+$/'),'message' => 'Please enter a valid phone number.'])
            ->notEmpty('inquiry_subject')
            ->notEmpty('details')
            ->notEmpty('email_add')->add('email_add', 'validFormat', ['rule' => 'email','message' => 'E-mail must in valid format']);

            return $validator;
    }
}

/*
confirm Password 
$validator->add('password', ['compare' => ['rule' => ['compareWith', 'confirm_password'],'message'=>'confirm Password does not match with  password']]);*/