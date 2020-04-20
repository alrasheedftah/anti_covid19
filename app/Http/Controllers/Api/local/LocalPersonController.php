<?php

namespace App\Http\Controllers\Api\local;

use App\Http\Controllers\Controller;
use App\model\Local;
use Illuminate\Http\Request;

class LocalPersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Local $local)
    {
        $persons=$local->persons;
        return $this->showAll($persons);
    }

}
