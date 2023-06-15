<?php

use App\Models\TblUiString;

$allData = TblUiString::where('project_id', 1)->get();
//key name [LOGIN_TITLE, EMAIL_ADDRESS, PASSWORD, SUBMIT]
$data = [];

foreach ($allData as $item) {
    $data[$item->key_name] = $item->en;
}
return $data;
