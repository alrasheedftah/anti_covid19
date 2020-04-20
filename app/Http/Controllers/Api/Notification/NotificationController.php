<?php

namespace App\Http\Controllers\Api\Notification;

use App\Http\Controllers\Api\ApiController;
use App\model\Notification;
use Illuminate\Http\Request;

class NotificationController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications=Notification::all();
        return $this->showAll($notifications);
    }
}
