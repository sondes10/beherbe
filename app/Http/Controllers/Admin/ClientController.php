<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;

class ClientController extends Controller
{

    public function index()
    {
        $clients= Client::all();
        return view('admin/client/index',compact(['clients']));
    }
}
