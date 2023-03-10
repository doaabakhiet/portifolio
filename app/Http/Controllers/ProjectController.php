<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects=ProjectResource::collection(Project::with('skill')->get());
        return Inertia::render('Projects/index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skills=Skill::all();
        return Inertia::render('Projects/Create',compact('skills'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=>['required','image'],
            'name'=>['required','min:3'],
            'project_url'=>['nullable'],
            'skill_id'=>['required'],
        ]);
        if($request->hasFile('image')){
            $image=$request->file('image')->store('projects');
            Project::create([
                'name'=>$request->name,
                'image'=>$image,
                'project_url'=>$request->project_url,
                'skill_id'=>$request->skill_id,
            ]);
            return Redirect::route('projects.index')->with('message','Project Saved Successfully');
        }
        return redirect()->back();
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
    public function edit(Project $project)
    {
        $skills=Skill::all();
        return Inertia::render('Projects/Edit',compact('project','skills'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $image=$project->image;
        $request->validate([
            // 'image'=>['required','image'],
            'name'=>['required','min:3'],
            'project_url'=>['nullable'],
            'skill_id'=>['required'],
        ]);
        if($request->hasFile('image')){
            Storage::delete($project->image);
            $image=$request->file('image')->store('skills');
        }
        $project->Update([
            'name'=>$request->name,
            'image'=>$image,
            'project_url'=>$request->project_url,
            'skill_id'=>$request->skill_id,
        ]);
        if($project){
            return Redirect::route('projects.index')->with('message','Project Updated Successfully');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        Storage::delete($project->image);
        $project->delete();
        return Redirect::route('projects.index')->with('message','Project Deleted Successfully');
    }
}
