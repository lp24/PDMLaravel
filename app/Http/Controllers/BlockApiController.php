<?php

namespace App\Http\Controllers;

use App\Block;

use Illuminate\Http\Request;

class BlockApiController extends Controller
{
    public function index(){
        return Block::select('id','sala', 'day_id')->orderBy('day_id')->get();
    }
    
    public function showBlock($id){
        return Block::with('blocks')->findOrFail($id);
    }

    public function storeBlock(Request $request){
        return Block::create($request->all());
    }

    public function updateBlock(Request $request, Block $block){
        return $block->update($request->all()) ? ['message'=>'DayUpdated']:
                                                    ['error'=>'UnableToUpdate'];
    }
}
