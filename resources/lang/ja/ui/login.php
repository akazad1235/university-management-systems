<?php

use App\Models\TblUiInputForm;
use App\Models\TblUiString;

$allData = TblUiInputForm::select(['key_name', 'label_ja','placeholder_ja'])->where('type', 1)->get();
//key name [ EMAIL_ADDRESS, PASSWORD]
        //dd($allData);
    $data = [];

    foreach ($allData as $key => $item) {
        $data[$item->key_name] = ['label' => $item->label_ja, 'placeholder' => $item->placeholder_ja];

    }
//dd($data);
return $data;
