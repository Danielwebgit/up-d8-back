<?php

namespace App\Repositories\Address;

use App\Models\Address;
use App\Models\State;
use App\Models\City;

class AddressRepository
{
    private $address;
    private $addressStates;
    private $addressCities;

    public function __construct()
    {
        $this->address = new Address();
        $this->addressStates = new State();
        $this->addressCities = new City();
    }

    public function createOrUpdateAddress($addressForm, $clientId = null)
    {
        return $this->address->createOrUpdate(
            $clientId, [
            'client_id' => $clientId,
            'city_id' => $addressForm['city_id'],
            'state_id' => $addressForm['state_id'],
            'address_detail' => $addressForm['address_detail']
        ]);
    }

    public function fetchStates()
    {
        return $this->addressStates->query()->get();
    }

    public function fetchCities($stateId)
    {
        return $this->addressCities->query()->where('state_id', $stateId)->get();
    }
}