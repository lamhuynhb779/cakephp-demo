<?php


namespace App\Controller\Component;


use Cake\Controller\Component;

class GenerateComponent extends Component
{
    public function generateAccountNumber(){
        $len = 12;
        $min =  (int)pow(10, $len - 1);
        $max = (int)pow(10, $len) - 1;
        return rand($min, $max);
    }

}