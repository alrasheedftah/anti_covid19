<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    
    protected $table='locals';


    protected $fillable=[
        'name',
        'lan',
        'lat',
        'city_id'
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function persons(){
        return $this->belongsTo(Person::class);
    }
}
