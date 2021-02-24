<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artigos;

class SearchController extends Controller
{
    public function index(){
        return view('/search');
    }

}
