<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['cidade', 'state_id'];

    public function addresses(){
        return $this->hasMany(Address::class, 'city_id');
    }

    public function state(){
        return $this->belongsTo(State::class, 'state_id');
    }
}
