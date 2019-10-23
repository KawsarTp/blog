<?php

namespace App\Http\Controllers;

use App\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Task;


class ProjectController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function logout($id)
    {
        auth()->logout($id);

        return redirect('/task/login');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $projects = Project::latest();

        if($month = request('month')){
            $projects->whereMonth('created_at',Carbon::parse($month)->month);
        }

        if($year = request('year')){
            $projects->whereYear('created_at',Carbon::parse($year)->year);
        }

        $projects = $projects->paginate(5);
        return view("home",compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Project $project)
    {

        $request->validate([
            'text'=>'required',
            'description'=>'required|min:20'

        ]);
        
        Project::create([
            'user_id'=>auth()->user()->id,
            'heading'=>$request->text,
            'description'=>$request->description
        ]);
        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        $project->click = $project->click + 1;
        $project->save(); 
        return view('show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('edit',compact('project'));
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
        $update = Project::find($id);

        $update->heading = $request->text;
        $update->description = $request->description;

        $update->save();

        return redirect('/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }

    public function addComment(){
        $this->validate(request(),['comment'=>'required']);
        Task::create([
            'user_id'=>auth()->user()->id,
            'project_id'=>request('project_id'),
            'description'=>request('comment'),
        ]);
        return redirect()->back();
    }
}
