<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Info2;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data1=Info::all();
        $data2=Info2::all();
        return view('welcome',array('data1'=>$data1,'data2'=>$data2));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('send');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->how =="1") {
            $sec = new Info;
            $sec->name =$request->name;
            $sec->surname =$request->surname;
            $sec->save();
        }
        if ($request->how =="2") {
            $sec2 = new Info2;
            $sec2->name =$request->name;
            $sec2->surname =$request->surname;
            $sec2->save();
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function show(Info $info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function edit(Info $info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Info $info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->select == '2') {
            $del = Info2::destroy($id);
        }
        if ($request->select == '1') {
            $del = Info::destroy($id);
        }
        return redirect()->back();
    }
}
