<?php

namespace App\Http\Controllers\Api\Volunteer;

use App\Http\Controllers\Api\ApiController;
use App\model\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volunteers=Volunteer::all();
        return $this->showAll($volunteers);
    }

}
