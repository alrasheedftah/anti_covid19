<?php

namespace App\Http\Controllers\Api\local;

use App\Http\Controllers\Api\ApiController;
use App\model\Local;
use Illuminate\Http\Request;

class LocalController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locals=Local::all();
        return $this->showAll($locals);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $local=Local::create($request->all());
        return $this->showOne($local);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function show(Local $local)
    {
        return $this->showOne($local);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Local $local)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function destroy(Local $local)
    {
        $local->delete();
        return $this->showOne($local);
    }
}
