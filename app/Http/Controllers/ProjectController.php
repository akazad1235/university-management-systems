<?php

namespace App\Http\Controllers;

use App\Models\TblProject;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $active =  TblProject::where('status', 'active')->orderBy('id', 'desc')->get();
        $inactive =  TblProject::where('status', 'inactive')->orderBy('id', 'desc')->get();
        return view('backend.services', ['services' => $active, 'inactive' => $inactive]);
    }
    public function store(Request $request)
    {
       // return $request->all();

        try {
            TblProject::create([
                'name_ja' => $request->name_ja,
                'name_en' => $request->name_en,
                'email' => $request->email,
                'slug' => str_replace(' ', '_', $request->name_en),
                'project_code' => rand(111111, 999999),
                'description_ja' => $request->description_ja,
                'description_en' => $request->description_en,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
            ]);
            return response()->json(['status' =>200, 'msg' => 'data saved success', 'data' => null]);
        }catch (\Exception $ex){
            return response()->json(['status' => 404, 'msg' => $ex->getMessage(), 'data' => null]);
        }
    }
    /*
     *
     */
    public function update(Request $request){
      //  return $request->all();
        try {
            $project =  TblProject::findOrFail($request->id);
            if($project){
                $project->update([
                    'name_ja' => $request->name_ja,
                    'name_en' => $request->name_en,
                    'email' => $request->email,
                    'slug' => str_replace(' ', '_', $request->name),
                    'description_ja' => $request->description_ja,
                    'description_en' => $request->description_en,
                    'start_date' => $request->start_date,
                    'end_date' => $request->end_date,
                ]);
            }
            return response()->json(['status' =>200, 'msg' => 'data updated success', 'data' => null]);
        }catch (\Exception $ex){
            return response()->json(['status' => 404, 'msg' => $ex->getMessage(), 'data' => null]);
        }
    }
    public function inactive(string $id){
        try {
            $project = TblProject::findOrFail(base64_decode($id));
            if ($project){
                $project->update([
                    'status' => 'inactive',
                ]);
                $notifications = array(
                    'message' => 'Post created successfully!',
                    'alert-type' => 'success'
                );

                return redirect()->back()->with(['message' => 'seccuss']);
            }
            return response()->json(['status' =>200, 'msg' => 'data updated success', 'data' => null]);
        }catch (\Exception $ex){
            return response()->json(['status' => 404, 'msg' => $ex->getMessage(), 'data' => null]);
        }
    }
}
