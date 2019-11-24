<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;

class WeatherController extends AppController{

    public function initialize()
    {
        $this->loadComponent('InteractEAPI');
        $this->loadComponent('Flash');
    }
    
    public function view(){
        if($this->request->is('get')){
            $one_month_ago = date('Y-m-d',
                strtotime(date('Y-m-d',
                    strtotime(date('Y-m-d')))."-1 month"));
            $rent_header = 'Search: and[][created][greater]=' . $one_month_ago . '%and[][created][less]=' . date('Y-m-d') . '%';        
            $lat = $this->request->getQuery('lat');
            $lng = $this->request->getQuery('lng');

            if($lat!=='' && $lng!==''){
                $url = "https://api.sunrise-sunset.org/json?lat=".$lat."&lng=".$lng;
                $get_data = $this->InteractEAPI->callAPI('GET', $url, false, $rent_header);
    
                $response = json_decode($get_data, true);

                $weathersTable = TableRegistry::getTableLocator()->get('Weathers');
                $weather = $weathersTable->newEntity($response['results']);

                // dump($weather->sunset);
                if($weathersTable->save($weather)){
                    $this->Flash->success('The weather has been saved.');
                }else{
                    $this->Flash->error('The weather not be saved. Please try again!');
                }
    
                $this->set('gresponse', json_encode($response['results']));
            }
        }else if($this->request->is('post')){
            $lat = $this->request->getData('lat');
            $lng = $this->request->getData('lng');
            
            if($lat!=='' && $lng!==''){
                $arrdata = array(
                    "lat" => $lat,
                    "lng" => $lng
                );

                $url = "http://localhost:8765/weather/post";
                $post_data = $this->InteractEAPI->callAPI('POST', $url, json_encode($arrdata));

                $response = json_decode($post_data, true);

                // $this->set('posresponse', json_encode($response['results']));
                $this->set('posresponse', json_encode($response));
            }
        }else if($this->request->is("put")){
            // $data_array =  array(
            //     "amount" => (string)($lease['amount'] / $tenant_count)
            //  );
             
            //  $update_plan = callAPI('PUT', 'https://api.example.com/put_url/'.$lease['plan_id'], json_encode($data_array));
            //  $response = json_decode($update_plan, true);
        }else if($this->request->is("delete")){
            // callAPI('DELETE', 'https://api.example.com/delete_url/' . $id, false);
        }
        
    }

    private function postResponse(){
        if($this->request->is('post')){
            // echo $this->request->getData();
            echo 5;
        }
    }
}