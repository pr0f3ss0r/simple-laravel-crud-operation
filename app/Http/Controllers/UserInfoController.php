<?php

namespace App\Http\Controllers;

use App\Models\User_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $user_infos = new User_info();

        $user_infos->name = $request->input('name');
        $user_infos->age = $request->input('age');
        $user_infos->course = $request->input('course');
        $user_infos->hobby = $request->input('hobby');

        $user_infos->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User_info  $user_info
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //Using the Model Class
        //$info = User_info::all();
        //return view('welcome', compact('info'));

        //Using the select statement
        //$info = DB::select('select * from user_infos');
        //return view('welcome', compact('info'));

        //Using the table method
        $info = DB::table('user_infos')->get();
        return view('welcome', compact('info'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User_info  $user_info
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Edit specific user info 
        $to_edit = DB::table('user_infos')->find($id);
        return view('edit', compact('to_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User_info  $user_info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user_infos = User_info::find($id);

        $user_infos->name = $request->input('name');
        $user_infos->age = $request->input('age');
        $user_infos->course = $request->input('course');
        $user_infos->hobby = $request->input('hobby');

        $user_infos->update();

        return redirect('/')->with('status', 'Data updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User_info  $user_info
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user_infos = User_info::find($id);

        $user_infos->delete();

        return redirect('/');

    }
}
