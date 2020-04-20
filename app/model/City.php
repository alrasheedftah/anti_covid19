<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    
    protected $table='cities';


    protected $fillable=[
        'name',
        'lan',
        'lat',
        'state_id'
    ];
    public function state()
    {
        return $this->belongsTo(State::class);
    }


    public function locals()
    {
        return $this->hasMany(City::class);
    }

}
