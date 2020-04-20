<?php

namespace App\Http\Controllers\Api\person;

use App\Http\Controllers\Api\ApiController;
use App\model\Person;
use Illuminate\Http\Request;

class PersonGroupController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Person $person)
    {
        $members=Person::where('groupID',$person->groupID)->where('id', '!=', $person->id)->get();
        // $group=$person->groups;
        // //->with('persons')
        // // ->get()
        // // ->pluck('persons')
        // // ->unique('id')
        // // ->values();;
        return $this->showAll($members);

    }

    public function store(Request $request,Person $person){
        $members=Person::find($request->member_id);
        if($members->id==$members->groupID){
        $members->groupID=$person->id;
        $members->save();
        return $this->showOne($members);
        }
        else
		return response()->json("This Person is added alreay");
        


    }

}
