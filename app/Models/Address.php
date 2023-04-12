<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'address_addresses';

    protected $fillable = [
        'client_id',
        'city_id',
        'state_id'
    ];

    public static function createOrUpdate($clientId, $data)
    {
        $address = Address::where('client_id', $clientId)->first();
        
        if ($address) {
            $address->update($data);
        } else {
            $address = Address::create($data);
        }
        return $address;
    }
}
