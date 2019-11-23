<?php


namespace App\Model\Table;


use Cake\ORM\Table;

class CustomersTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config); // TODO: Change the autogenerated stub
        $this->setTable('customers');
        $this->setPrimaryKey('id');
        $this->hasOne('Accounts',[
            'className' => 'Accounts',
            'foreignKey'=> 'license',
            'bindingKey'=> 'license'
        ]);
    }
}