<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class WeathersTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('weathers');
        $this->setPrimaryKey('id');
    }
}