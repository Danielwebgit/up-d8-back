<?php

namespace App\Services\Client;


class ClientService
{
    public function search(array $params, $query)
    {
        if(isset($params['cpf']) && $params['cpf'] != null) {
            $query->where('cpf', $params['cpf']);
        }
        
        if(isset($params['name']) && $params['name'] != null) {
            $query->where('name','like','%'.$params['name'].'%');
        }

        if(isset($params['date_of_birth']) && $params['date_of_birth'] != null) {
            $query->where('date_of_birth', $params['date_of_birth']);
        }

        if(isset($params['gender']) && $params['gender'] != null) {
            $query->where('gender', $params['gender']);
        }

        return $query->whereHas('address', function($q) use ($params) {
            
            if(isset($params['city_id']) && $params['city_id'] != null) {
                $q->where('city_id', (int) $params['city_id']);
            }

            if(isset($params['state_id']) && $params['state_id'] != null) {
                $q->where('state_id', (int) $params['state_id']);
            }
            return $q;
        });
    }
}