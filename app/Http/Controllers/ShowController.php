<?php

namespace App\Http\Controllers;

use App\URL;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    //
    public function index(){
        $URLs = URL::all();
        return view('index',compact('URLs'));
    }
}
