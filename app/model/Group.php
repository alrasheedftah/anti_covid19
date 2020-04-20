<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Person;
class Group extends Model
{
    //

    protected $table='groups';


    protected $fillable=[
        'name'
    ];

    public function persons(){
        return $this->belongsToMany(Person::class,'person_group');
    }

    public function owner(){
        return $this->belongsTo(Person::class);
    }
}
