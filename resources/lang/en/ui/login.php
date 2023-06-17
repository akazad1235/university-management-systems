<?php

use App\Models\TblUiInputForm;
use App\Models\TblUiString;

$allData = TblUiInputForm::select(['key_name', 'label_en','placeholder_en'])->where('type', 0)->get();
//key name [ EMAIL_ADDRESS, PASSWORD]
         //dd($allData);
        $data = [];

        foreach ($allData as $key => $item) {
            $data[$item->key_name] = ['label' => $item->label_en, 'placeholder' => $item->placeholder_en];

        }
    //dd($data);
    return $data;
