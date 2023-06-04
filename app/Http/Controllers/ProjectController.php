<?php

namespace App\Http\Controllers;

use App\Models\TblProject;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects =  TblProject::get();
        return view('backend.services', ['services' => $projects]);
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
            ]
        );
        try {
            TblProject::create([
                'name' => $request->name,
                'email' => $request->email,
                'slug' => str_replace(' ', '_', $request->name),
                'project_code' => rand(111111, 999999),
                'description' => $request->description,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
            ]);
        }catch (\Exception $ex){
            return $ex->getMessage();
        }
        return $request->all();
    }
    public function edit($id){

    }
    public function update(Request $request){
        try {
            $project =  TblProject::findOrFail($request->id);
            if($project){
                $project->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'slug' => str_replace(' ', '_', $request->name),
                    'description' => $request->description,
                    'start_date' => $request->start_date,
                    'end_date' => $request->end_date,
                ]);
            }
            return response()->json(['status' =>200, 'msg' => 'data updated success', 'data' => null]);
        }catch (\Exception $ex){
            return response()->json(['status' => 404, 'msg' => $ex->getMessage(), 'data' => null]);
        }


    }
}