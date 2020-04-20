<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Group;
class Person extends Model
{
    //
    protected $table='persons';
    
    protected $fillable=[
        'first_name',
        'second_name',
//        'product_price',
        'last_name',
        'gender',
        'phone',
        'age',
        'status',
        'groupID',
        'local_id'
    ];

    public function local(){
        return $this->belongsTo(Local::class);
    }

    public function groups(){
        return $this->belongsToMany(Group::class,'person_group');
    }

    public function seens(){
        return $this->belongsToMany(Person::class, "person_person", "person_id", "seen_person_id");//->with('saw');//->orWhere('person_id', $this->id);//->withPivot('person_id','seen_person_id','lan');;//->orWhere('seen_person_id', $this->id);;
      }


    public function saw(){
        return $this->belongsToMany(Person::class, "person_person", "seen_person_id", "person_id");//->orWhere('person_id', $this->id);//->withPivot('person_id','seen_person_id','lan');;//->orWhere('seen_person_id', $this->id);;
      }

      public function myGroup(){
          return $this->hasOne(Group::class);
      }

      public function volunteers(){
         return $this->hasOne(Volunteer::class);
      }

      public function notifications(){
         return $this->hasMany(Notification::class);
      }
      
}
