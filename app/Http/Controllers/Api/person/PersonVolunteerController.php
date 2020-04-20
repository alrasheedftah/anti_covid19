<?php

namespace App\Http\Controllers\Api\person;

use App\Http\Controllers\Api\ApiController;
use App\model\Person;
use App\model\Volunteer;
use Illuminate\Http\Request;

class PersonVolunteerController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Person $person)
    {
        $volunteer=$person->volunteer;
        return $this->showOne($volunteer);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Person $person)
    {
        $request->merge(['person_id'=>$person->id]);
        $volunteer=Volunteer::create($request->all());
        return $this->showOne($volunteer);

    }

    
}
