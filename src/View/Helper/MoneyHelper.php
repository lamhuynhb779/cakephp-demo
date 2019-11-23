<?php


namespace App\View\Helper;


use Cake\View\Helper;

class MoneyHelper extends Helper
{
    public function formatMoney($money){
        echo number_format($money,0,'',',');
    }
}