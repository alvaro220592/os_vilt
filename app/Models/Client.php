<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'cpf_cnpj',
        'person_id'
    ];

    public function address(){
        return $this->belongsTo(Address::class, 'address_id');
    }

    public function person(){
        return $this->belongsTo(People::class, 'person_id');
    }

    // public function city(){
    //     return $this->belongsToThrough(City::class, Address::class);
    // }

    // public function state(){
    //     return $this->belongsToThrough(State::class, City::class, null, null, null, 'state_id');
    // }
}
