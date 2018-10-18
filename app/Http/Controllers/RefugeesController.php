<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Refugees;
use \App\Job;
use DB;

class RefugeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //call the index page in resources
        $refugee = Refugees::all();
        return view('refugees.index',compact('refugee')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('refugees.create');
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
        $this->validate($request,['Full_Name'=>'required|string|max:255',
        'Country'=>'required',
        'Age'=>'required',
        'Gender'=>'required',
        'EducationLevel'=>'required',
        ]);
        Refugees::create($request->all());
        return redirect()->route('refugees.index')->with('success','Refugee Details successfully added');
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
        //edit the refugee table
        $refugee = Refugees::find($id);
        return view('refugees.edit',compact('refugee'));
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
        //
        $this->validate($request,[
        'Full_Name'=>'required',
        'Country'=>'required',
        'Age'=>'required',
        'Gender'=>'required',
        'EducationLevel'=>'required',
        'Skill' => 'required',
        ]);

        Refugees::find($id)->update($request->all());
        return redirect()->route('refugees.index')->with('success','Refugee succcessfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Refugees::find($id)->delete();
        return redirect()->route('refugees.index')->with('success','Details have been deleted');
    }
    public function allocation(){
        $refugees = DB::table('refugees')
            ->join('skills', 'refugees.skill_id', '=', 'skills.id')
            ->join('jobs', 'jobs.skill_id', '=', 'skills.id')
            ->select('refugees.Full_Name', 'skills.Skill', 'jobs.description')
            ->get();
            return view('allocation.index',['refugees'=>$refugees]);
    }
}
