<?php

namespace App\Http\Controllers;

use App\Block;

use Illuminate\Http\Request;

class BlockApiController extends Controller
{
    public function getBlocks(){
        return Block::select('id','sala', 'day_id')->get();
    }

    public function getDayBlocks($id){
        return Block::select('id','sala', 'day_id')->where('day_id', $id)->orderBy('begin')->get();
    }

    public function showBlock($id){
        return Block::findOrFail($id);
    }

    public function storeBlock(Request $request){
        return Block::create($request->all());
    }

    public function updateBlock(Request $request, $id){
       /* $block = Block::find($id);
        if(!$block) {
            return response()->json(['message' => 'Document not found'], 404);
        }
        $block->content = $request -> input('content');
        $block->save();
        return response()->json(['block'=>$block]);*/
        return Block::find($id)->update($request->all()) ? ['message'=>'BlockUpdated']:
                                                    ['error'=>'UnableToUpdate'];
    }
}
