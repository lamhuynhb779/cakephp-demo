<?php

namespace App\Controller;

class WeatherController extends AppController{

    public function initialize()
    {
        $this->loadComponent('InteractEAPI');
    }
    
    public function view(){
        if($this->request->is('post')){
            $lat = $this->request->getData('lat');
            $lng = $this->request->getData('lng');
            $url = "https://api.sunrise-sunset.org/json?lat=".$lat."&lng=".$lng;
            $get_data = $this->InteractEAPI->callAPI('GET', $url, false);

            $response = json_decode($get_data, true);

            $this->set('gresponse', json_encode($response['results']));
        }
        
    }
}