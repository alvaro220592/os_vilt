<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'num_endereco',
        'address_id'
    ];

    public function address(){
        return $this->belongsTo(Address::class, 'address_id');
    }

    public function email(){
        return $this->hasOne(Email::class, 'person_id');
    }

    public function telefone(){
        return $this->hasOne(Phone::class, 'person_id');
    }
}
