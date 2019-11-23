<?php


namespace App\View\Helper;


use Cake\View\Helper;

class DateHelper extends Helper
{
    public function formatDate($date){
        echo date_format($date,'Y/m/d');
    }
}