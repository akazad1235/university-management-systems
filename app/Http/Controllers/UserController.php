<?php

namespace App\Http\Controllers;

use App\Models\TblProject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;
use Barryvdh\DomPDF\Facade\Pdf;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('roles')->get();
      // return count($users[0]->roles);
        return view('backend.pages.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::get();
        return view('backend.pages.users.create', ['roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        $user = User::find(1);
//         $project = TblProject::find(2);
//        $project->users()->syncWithoutDetaching([3]);

       // $project = TblProject::find(1);
        $user =  User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        if($request->roles){
            $user->assignRole($request->roles);
        }
        return 'success';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function exprotChart(Request $request){
     // return  $request->file('data');
        $chartImage = $request->input('chartImage');
        // Decode the base64 image data
        $imageData = base64_decode($chartImage);
       // return $imageData;
        $img_encode = str_replace('data:image/png;base64,', '', $chartImage);
        $img = str_replace(' ', '+', $img_encode);
        $data = base64_decode($img);

        // Generate a unique filename for the chart image
        $filename = uniqid('chart_') . '.png';

        // Save the chart image to the storage directory
        Storage::disk('public')->put('charts/' . $filename, $data);
        return $chartImage;
         return $request->all();
    }
    public function pdf(Request $request){
       // return $request->all();
        return view('testPdf');

        $data =[
            'tes' => 'dse'
        ];
        $pdfOptions = [
            'isRemoteEnabled' => true,
            'enable_html5_parser' => true,
            'isJavascriptEnabled'=> true,
            // Add more options here...
        ];
        $chartHtml = view('testPdf', compact('data'))->render();
        //return $chartHtml;
//        $options = new Options();
//        $options->set('defaultFont', 'Arial');
        $dompdf = Pdf::loadHtml($chartHtml);
        //$dompdf->loadHtml();
        //$dompdf->render();
        return  $dompdf->stream('chart.pdf');
       //  $pdf->stream();

//        $pdf = Pdf::loadView('testPdf', $data);
//        $pdf->setOptions($pdfOptions);
//        return $pdf->download('invoice.pdf');
        return back();
    }
}
