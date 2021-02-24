<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyVehiclesController extends Controller
{
    public function index(){
        return view('myvehicles');
    }

}
