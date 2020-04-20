<?php

namespace App\Http\Controllers\Api\person;

use App\Http\Controllers\Api\ApiController;
use App\model\Person;
use App\model\Notification;

use Illuminate\Http\Request;

class PersonNotificationController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Person $person)
    {
        $notifications=$person->notifications;
        return $this->showAll($notifications);
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
        $notifi=Notification::create($request->all());
        return $this->showOne($notifi);

    }

}
