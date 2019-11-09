<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Type;
use DB;     
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->project) {
            $proLoc = DB::table('projects')
                    ->select(DB::raw('location'))
                    ->groupBy('location')
                    ->get();
            
            $projects = Project::where('location',request()->project)->get();
        }
        else
        {
            $proLoc = DB::table('projects')
                    ->select(DB::raw('location'))
                    ->groupBy('location')
                    ->get();
                        $projects = Project::all();
        }
        return view('project',compact('projects','proLoc'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $singlproject = Project::where('slug',$slug)->firstOrFail();

        session()->push('projects.recently_viewed',$singlproject->id);

        $mightalsolike = Project::where(
            'slug','!=',$singlproject->slug)
        ->orWhere('location','!=',$singlproject->location)
        ->get();

        return view('projectDetail',compact('singlproject','mightalsolike'));
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
        //
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
    }
}
