<?php

namespace App\Http\Controllers\Ui;

use App\Http\Controllers\Controller;
use App\Models\TblUiInputForm;
use Illuminate\Http\Request;
use Exception;
use App\Traits\ResponseTrait;

class InputFormController extends Controller
{
    use ResponseTrait;
    public function index(){
        $inputForms =TblUiInputForm::get();
        return view('backend.pages.ui_management.input_form.index', ['inputForms' => $inputForms]);
    }
    public function store(Request $request){

        try {
           $keyName = str_replace(' ', '_',strtoupper($request->key_name));
           $result = TblUiInputForm::create([
                'key_name' => $keyName,
                'label_ja' => $request->label_ja,
                'label_en' => $request->label_en,
                'placeholder_ja' => $request->placeholder_ja,
                'placeholder_en' => $request->placeholder_en,
            ]);

            if($result){
                return $this->responseSuccess($result,'data has been successfully updated', 201);
            }else{
                throw new Exception('something wrong', 400);
            }
        }catch (\Exception $ex){
        return $this->responseError($ex->getMessage(), 'something wrong', $ex->getCode());
        }
        return $request->all();
    }
}
