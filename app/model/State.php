<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table='states';


    protected $fillable=[
        'name',
        'lan',
        'lat'
    ];
    public function cities()
    {
        $this->hasMany(City::class);
    }
}
