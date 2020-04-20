<?php

namespace App\Http\Controllers\Api\state;

use App\Http\Controllers\Api\ApiController;
use App\model\State;
use App\model\City;
use Illuminate\Http\Request;

class StateCityController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(State $state)
    {
        $cities=$state->cities;
       return $this->showOne($cities);
    }

}
