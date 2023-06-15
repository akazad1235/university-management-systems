<?php

use App\Models\TblUiString;

$allData = TblUiString::get();

$data = [];

foreach ($allData as $item) {
    $data[$item->key_name] = $item->ja;
}
return $data;
