<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\Address\AddressRepository;
use Illuminate\Http\Request;

/**
 * Esse controlador é responsável por ser genérico em relação
 * aos enderecos da aplicação...
 */
class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fetchStates(AddressRepository $addressRepository)
    {
        $states = $addressRepository->fetchStates();
        return response()->json($states);
    }

    public function fetchCities(Request $request, AddressRepository $addressRepository)
    {
        $cities = $addressRepository->fetchCities($request->input()['state_id']);
        return response()->json($cities);
    }
}