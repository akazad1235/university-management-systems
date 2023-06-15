<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ui\LoginUiRequest;
use App\Models\TblUiString;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;


class LoginUiController extends Controller
{
    public function login(){


//        $path = resource_path('lang/jpn.json');
//        $jsonContent = file_get_contents($path);
//        $translations = json_decode($jsonContent, true);
//        //$translations['common']['greeting'] = 'Updated greeting';
//       // $translations['common1']['key1'] = 'New translation update new common 1 japa';
//        //unset($translations['common']['new_key3']);
//        $data =  json_encode($translations);
//       // return $translations;
//        $fileStorePath = resource_path('/lang/jpn.json');
//        File::put($fileStorePath, $data);
      //  Storage::disk('ui')->put('file1.json', $data);

        return view('backend.pages.ui_management.login.create', );
    }
    public function store(LoginUiRequest $request){
//        $validator = Validator::make($request->all(), $request->rules());
//        if ($validator->fails()) {
//            return 'errororlrkjldskjfldskjflk';
//        }

      // return  $request->all();

        $arr = [
            'LOGIN_TITLE' => [$request->login_title_en, $request->login_title_ja,],
            'EMAIL_ADDRESS' => [$request->email_address_en, $request->email_address_ja],
            'PASSWORD' => [$request->password_en, $request->password_ja],
            'SUBMIT' => [$request->login_btn_en, $request->login_btn_ja],
        ];

        foreach ($arr as $key=>$value){
            TblUiString::create([
                'project_id' => 1,
                'key_name' => $key,
                'en' => $value[0],
                'ja' => $value[1],
            ]);
        }

        return 'okkkkkkkk';



    }


}
