<?php

namespace App\Http\Controllers;

use App\Day;

use Illuminate\Http\Request;

class DayController extends Controller
{
    public function index(){
        return view ('index');
    }

     public function getDay($id){
        $day = Day::findOrFail($id);
        return view('day', ['day' => $day]);
    }
}
