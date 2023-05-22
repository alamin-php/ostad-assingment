<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ["name" => "John Doe", "age" => 25];
        return response()->json([
            'message' => 'Success',
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        return $name;
    }

    public function userAgent(Request $request)
    {
        $userAgent = $request->header('User-Agent');
        return $userAgent;
    }

    public function apiEndpoint(Request $request)
    {
        $page = $request->query('page', null);
        return response()->json(['page' => $page]);
    }

    public function imageUpload(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = $file->getClientOriginalName();
            $filePath = 'uploads/' . $fileName;
            $file->storeAs('public', $filePath);
            return response()->json([
                'status' => 'success',
                'message' => 'File uploaded successfully'
            ], 201);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'File upload faild'
            ], 404);
        }
    }

    public function retrieveRememberToken(Request $request)
    {
        $rememberToken = $request->cookie('remember_token', null);
        return $rememberToken;
    }

    public function formSubmit(Request $request)
    {
        $email = $request->input('email');

        return response()->json([
            'success' => 'true',
            'message' => 'Form submitted successfully.',
            'data' => [
                'email' => $email,
            ],
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
