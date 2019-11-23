<?php


namespace App\Model\Entity;

use Cake\ORM\Entity;

class Customer extends Entity
{
    protected function _getFullName(){
        return $this->firstname.' '.$this->lastname;
    }
}