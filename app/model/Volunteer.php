<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $table='volunteers';

    protected $fillable=[
        'agree',
        'person_id',
    ];

    public function person(){
        return $this->belongsTo(Person::class);
    }

}
