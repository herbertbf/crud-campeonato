<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Time;


class TimeController extends Controller
{
    public function index(){

        $times = Time::all();
        return view('index', ['times' => $times]);

    }
    public function form(){
        return view('form');
    }
}
