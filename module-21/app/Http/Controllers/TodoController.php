<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function TodoList(){
        $todo = Todo::latest()->get();
        return response()->json([
            'status'=>'success',
            'todo'=>$todo
        ]);
    }

    public function TodoCreate(Request $request){
        Todo::create([
            'name'=>$request->input('name'),
            'user_id'=>$request->header('user_id')
        ]);
        return response()->json([
            'status'=>'success',
            'message'=>'Todo created successful'
        ]);
    }
    public function TodoUpdate(Request $request, $id){
        Todo::where('id', $id)->update([
            'name'=>$request->input('name'),
            'user_id'=>$request->header('user_id')
        ]);
        return response()->json([
            'status'=>'success',
            'message'=>'Todo uodated successful'
        ]);
    }
    public function TodoShow($id){
        $todo = Todo::where('id', $id)->first();
        return response()->json([
            'status'=>'success',
            'todo'=>$todo
        ]);
    }

    public function TodoDelete($id){
        Todo::where('id', $id)->delete();
        return response()->json([
            'status'=>'success',
            'message'=>'Todo deleted successful'
        ]);
    }


}
