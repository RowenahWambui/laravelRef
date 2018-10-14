<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Camps;

class CampsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $camp = Camps::all();
        return view('camp.index', compact('camp'));

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
        $this->validate($request,[
        'Camp_Name'=>'required',
        'Camp_Location'=>'required',
        'Camp_Capacity'=>'required',
        ]);
        Camps::create($request->all());
        return redirect()->route('camp.index')->with('success','Camp Details successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $camp = Camps::find($id);
        return view('camp.index',compact('camp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'Camp_Name'=>'required',
            'Camp_Location'=>'required',
            'Camp_Capacity'=>'required',
            ]);
            Camps::find($id)->update($request->all());
            return redirect()->route('camp.index')->with('success','Camp Details successfully added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Camps::find($id)->delete();
        return redirect()->route('camp.index')->with('success','Details have been deleted');
    }
}
