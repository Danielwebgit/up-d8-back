<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\Client\ClientRepository;
use App\Repositories\Address\AddressRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, ClientRepository $clientsRepository)
    {
        return $clientsRepository->fetchClients($request->input());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(
        Request $request, ClientRepository $clientRepository,
        AddressRepository $addressRepository
    )
    {
        DB::beginTransaction();
        try {

            $storeClient = $clientRepository->createOrUpdateClient($request);
            $addressRepository->createOrUpdateAddress($request->address, $storeClient->id);
            
            DB::commit();
            return response()->json([
                'data' => ["Cliente cadastrado com sucesso!"]
            ], 200);
            
        }catch(Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $updateClient = (new ClientRepository())->createOrUpdateClient($request, (int) $id);
        if($updateClient) {
            (new AddressRepository())->createOrUpdateAddress($request->address, $updateClient->id);
                return response()->json(['data' => ["Cliente atualizado com sucesso!"]]);
        } else {
            return response()->json([
                'data' => ["Erro ao atualizar o cliente!"]
            ], 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientDelete = (new ClientRepository())->delete((int) $id);
        
        if($clientDelete) {
            return response()->json(['data' => ["Cliente deletado com sucesso!"]]);
        } else {
            return response()->json(['data' => ["Erro ao deletar o cliente!"]], 401);
        }
    }
}
