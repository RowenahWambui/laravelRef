<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Job;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {             
       
        $jobs = Job::all();
        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
        
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        $this->validate($request,['title'=>'required|string|max:255',
        'description'=>'required',
        'qualifications'=>'required',
        ]);


         Job::create($request->all());
         return redirect()->route('jobs.index')->with('success','Job Details successfully added');
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
    // public function edit($id)
    // {
    //     $data = Data::find ( $req->id );
    //     $data->name = $req->name;
    //     $data->save ();
    //     return response ()->json ( $data );
    // }
    public function edit($id)
    {
        //edit the refugee table
        $jobs = Job::find($id);
        return view('jobs.edit',compact('jobs'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {

    //     $job = Job::findOrFail($request->job_id);

    //      $job->update($request->all());
    //     return back(); 
    // }
    public function update(Request $request, $id)
    {
    
        Job::find($id)->update($request->all());
        return redirect()->route('jobs.index')->with('success','Job description succcessfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Job::find($id)->delete();
        //successful deletion message not working....still dont know why ;(
        return redirect()->route('jobs.index')->with('success','Details have been deleted');


    }
}
