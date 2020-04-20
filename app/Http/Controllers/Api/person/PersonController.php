<?php

namespace App\Http\Controllers\Api\person;

use App\Http\Controllers\Api\ApiController;
use App\model\Person;
use Illuminate\Http\Request;

class PersonController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $person=Person::all();
        return $this->showAll($person);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role=[
            'first_name'=>'required|max:50',
            'second_name'=>'required|max:50',
            'last_name'=>'required|max:50',
            'address'=>'required|max:50',
            'phone'=>'required|max:10|unique:persons,phone',
            'gender'=>'required',
            'age'=>'required',
            'local_id'=>'required',

        ];

        // $this->validate($request,$role);

        $request->merge(['status'=>3]);

        $person=Person::create($request->all());

        return $this->showOne($person);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        return $this->showOne($person);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        
    }
}
