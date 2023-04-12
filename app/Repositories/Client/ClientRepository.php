<?php

namespace App\Repositories\Client;

use App\Models\Client;
use App\Services\Client\ClientService;

class ClientRepository
{
    private $model;

    public function __construct()
    {
        $this->model = new Client();
    }

    public function fetchClients($params)
    {
        $limitPage = 4;
        $query = $this->model->query()->with('address.addressState', 'address.addressCity');
       
        if(!empty($params['page']) && count($params) > 1) {
            return (new ClientService)->search($params, $query)->paginate($limitPage);
        }

        return $query->paginate($limitPage);
    }

    public function createOrUpdateClient($clientForm, $clientId = null)
    {
        $client = $this->exist($clientId);
        
        if($clientForm->method() == 'PUT') {
           if($client) {
                $client->name = $clientForm['client']['name'];
                $client->cpf = $clientForm['client']['cpf'];
                $client->date_of_birth = $clientForm['client']['date_of_birth'];
                $client->gender =  $clientForm['client']['gender'];
                $client->update();
           }
        } else {
            $client = new Client([
                'name' => $clientForm['client']['name'],
                'cpf' => $clientForm['client']['cpf'],
                'date_of_birth' => $clientForm['client']['date_of_birth'],
                'gender' => $clientForm['client']['gender']
            ]);
            
            $client->save();
        }

        return $client;
    }

    public function exist($clientId)
    {
        $client = $this->model->find($clientId);
        if (!$client) {
            return false;
        } else {
            return $client;
        }
    }

    public function delete(int $clientId)
    {
        $client = $this->exist($clientId);
        
        if($client) {
            return $client->delete($clientId);
        } else {
            return false;
        }
    }
}