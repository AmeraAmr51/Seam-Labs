<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Exception;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //get all users for projects
    public function getAllProjects()
    {
        try {
            $projects = Projects::with('user')->get();
            return $projects;
        } catch (Exception) {
            return response()->json(array('status' => false, 'message' => "There is no Users", 'statuscode' => 400), 400);
        }
    }

    //get all users for Project By Project Id
    public function getAllProjectsById($id)
    {
        //
        try {
            $project = Projects::with('user')->findOrFail($id);
            return $project;
        } catch (Exception) {
            return response()->json(array('status' => false, 'message' => "No Project Info Found for This id", 'statuscode' => 400), 400);
        }
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
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(Projects $projects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit(Projects $projects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projects $projects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projects $projects)
    {
        //
    }
}
