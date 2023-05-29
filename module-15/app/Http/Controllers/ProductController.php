<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->get();
        if($products->count() > 0){
            return response()->json([
                'status'=>200,
                'products'=>$products,
            ],200);
        }else{
            return response()->json([
                'status'=>404,
                'message'=>'No Records Found',
            ],404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }else{
            $product = Product::create([
                'name'=>$request->name,
                'qty'=>$request->qty,
                'price'=>$request->price,
            ]);
            if($product){
                return response()->json([
                    'status' => 200,
                    'message' => 'User Created Successfully'
                ],200);
            }else{
                return response()->json([
                    'status' => 500,
                    'message' => 'Something went wrong'
                ],500);
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        if($product){
            return response()->json([
                'status'=>200,
                'product'=>$product,
            ],200);
        }else{
            return response()->json([
                'status'=>404,
                'message'=>'No Product Found',
            ],404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }else{
            $product = Product::find($id);
            $product->update([
                'name'=>$request->name,
                'qty'=>$request->qty,
                'price'=>$request->price,
            ]);
            if($product){
                return response()->json([
                    'status' => 200,
                    'message' => 'User Updated Successfully'
                ],200);
            }else{
                return response()->json([
                    'status' => 500,
                    'message' => 'Something went wrong'
                ],500);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        if($product){
            $product->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Product Deleted Successfully',
            ],200);
        }else{
            return response()->json([
                'status'=>404,
                'message'=>'Something went wrong',
            ],404);
        }
    }
}
