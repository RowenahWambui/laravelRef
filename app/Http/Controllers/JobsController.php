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
        // $request->session()->put('search', $request
        //         ->has('search') ? $request->get('search' ) : ($request->session()
        //         ->has('search')? $request->session()->get('search') : ''));

        //         $request->session()->put('field', $request
        //                 ->has('field') ? $request->get('field') : ($request->session()
        //                 ->has('field') ? $request->session()->get('field'):'title'));
                        
        //         $request->session()->put('sort', $request
        //         ->has('field') ? $request->get('sort') : ($request->session()
        //         ->has('field') ? $request->session()->get('sort'):'asc'));
       
                        
        // $jobs = new Job();
        // $jobs = $jobs->where('title','like', '%' . $request->session()->get('search'). '%')
        //              ->orderBy($request->get('field'), $request->session()->get('sort'))
        //               ->paginate(5);
        //  if($request->ajax()){
        //     return view('jobs.index', compact('jobs'));
        //  }else{
        //     return view('jobs.ajax', compact('jobs'));
        // }
                
       
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
    public function edit($id)
    {
        //
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

     //Job::find($id)->update($request->all());

        $job = Job::findOrFail($request->job_id);

         $job->update($request->all());
        return back(); 
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
