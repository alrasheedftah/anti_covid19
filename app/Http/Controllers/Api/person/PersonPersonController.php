<?php

namespace App\Http\Controllers\Api\person;

use App\Http\Controllers\Api\ApiController;
use App\model\Person;
use Illuminate\Http\Request;

class PersonPersonController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Person $person)
    {
        $personSeen=$person->seens;
        $saw=$person->saw;
        $personSeen=$personSeen->merge($saw);

        // $person->comunity;
        return $this->showAll($personSeen);
    }

    public function store(Request $request,Person $person){
        $person->seens()->attach($request->seen_person_id,$request->all());
        return $this->showOne($person);
    }

}
