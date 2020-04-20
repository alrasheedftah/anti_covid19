<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table='notifications';

    protected $fillable=[
        'status_description',
        'postion_description',
        'done'
    ];

    public function person(){
        return $this->belongsTo(Person::class);
    }

    
}
