<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ui\ProjectDevStringRequest;
use App\Models\TblUiString;
use Illuminate\Http\Request;
use App\Traits\ResponseTrait;
use mysql_xdevapi\Exception;

class ProjectDevSettingController extends Controller
{
    use ResponseTrait;
    public function index(){

        return view('backend.pages.ui_management.project.create_project_dev_string');
    }
    public function store(ProjectDevStringRequest $request){

        $keyName = str_replace(' ', '_', strtoupper($request->key_name));
        try {
           $data =  TblUiString::create([
                'key_name' => $keyName,
                'ja' => $request->ja,
                'en' => $request->en,
            ]);
           if($data){
              return $this->responseSuccess($data, 'data has been successfully done', 201);
           }else{
               throw new Exception('something wrong', 400);
           }
        }catch (\Exception $ex){
           return $this->responseError($ex->getMessage(), 'something wrong', $ex->getCode());
        }


        return 'ok';
    }
}
