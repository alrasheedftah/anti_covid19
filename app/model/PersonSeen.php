<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class PersonSeen extends Model
{
    //
    public function reader()
{
    $this->belongsToMany(Person::class, 'reader');
}

public function read()
{
    $this->belongsToMany(Person::class, 'reader');
}

}
