<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'cpf',
        'date_of_birth',
        'gender',
    ];

    public static function createOrUpdate($clientId, $data, $method)
    {
        $client = Client::with('address')->find($clientId);
        
        if ($client) {
            $client->update($data);
        } else {
            $client = Client::create($data);
        }
       return $client;
    }

    public function address()
    {
        return $this->hasMany(Address::class, 'client_id', 'id');
    }
}
