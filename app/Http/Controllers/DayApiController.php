<?php

namespace App\Http\Controllers;

use App\Day;

use Illuminate\Http\Request;

class DayApiController extends Controller
{
    public function index(){
        return Day::select('id','name')->get();
    }

    public function showDay($id){
        return Day::with('blocks')->findOrFail($id);
    }

    public function storeDay(Request $request){
        return Day::create($request->all());
    }

    public function updateDay(Request $request, Day $day){
        return $company->update($request->all()) ? ['message'=>'DayUpdated']:
                                                    ['error'=>'UnableToUpdate'];
    }
}
