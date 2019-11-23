<?php

namespace App\Controller\Component;

use Cake\Controller\Component;

class InteractEAPIComponent extends Component{

    public function callAPI($method, $url, $data){
        $cURL = curl_init();
        
        switch($method){
            case 'POST':
                curl_setopt($cURL, CURLOPT_POST, 1);
                if($data)
                    curl_setopt($cURL, CURLOPT_POSTFIELDS, $data);
                break;
            case 'PUT':
                curl_setopt($cURL, CURLOPT_CUSTOMREQUEST, "PUT");
                if($data)
                    curl_setopt($cURL, CURLOPT_POSTFIELDS, $data);
                break;
            default:
                if($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));    
        }

        //OPTIONS:
        curl_setopt($cURL, CURLOPT_URL, $url);
        curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
            'APIKEY: 1111111111111111',
            'Content-Type: application/json',
        ));

        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($cURL, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

        //EXECUTE:
        $result = curl_exec($cURL);
        if(!$result){
            die("Connection Failure");
        }
        curl_close($cURL);
        
        return $result;
    }
}