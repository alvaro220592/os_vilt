<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'cep',
        'logradouro',
        'city_id'
    ];

    public function clients(){
        return $this->hasMany(Client::class, 'address_id');
    }

    public function city(){
        return $this->belongsTo(City::class, 'city_id');
    }
}
