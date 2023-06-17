<?php

use App\Models\TblUiString;

$sessionId = session()->get('sessionId');

$allData = TblUiString::where('project_id', null)->orWhere('project_id', $sessionId)->get();
//key name [LOGIN_TITLE, EMAIL_ADDRESS, PASSWORD, SUBMIT]
$data = [];

foreach ($allData as $item) {
    $data[$item->key_name] = $item->en;
}
return $data;
