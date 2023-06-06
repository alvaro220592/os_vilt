<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'sobrenome',
        'cpf_cnpj',
        'num_endereco',
        'address_id'
    ];

    public function address(){
        return $this->belongsTo(Address::class, 'address_id');
    }

    public function city(){
        return $this->belongsToThrough(City::class, Address::class);
    }

    public function state(){
        return $this->belongsToThrough(State::class, City::class, null, null, null, 'state_id');
    }

    public function email(){
        return $this->hasOne(Email::class, 'client_id');
    }

    public function telefone(){
        return $this->hasOne(Phone::class, 'client_id');
    }
}
