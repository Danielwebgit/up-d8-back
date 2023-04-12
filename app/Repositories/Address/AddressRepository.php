<?php

namespace App\Repositories\Address;

use App\Models\Address;

class AddressRepository
{
    private $model;

    public function __construct()
    {
        $this->model = new Address();
    }

    public function createOrUpdateAddress($addressForm, $clientId = null)
    {
        return $this->model->createOrUpdate(
            $clientId, [
            'client_id' => $clientId,
            'city_id' => $addressForm['city_id'],
            'state_id' => $addressForm['state_id']
        ]);
    }
}