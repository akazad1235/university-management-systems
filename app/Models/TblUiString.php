<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblUiString extends Model
{
    use HasFactory;

    protected $fillable = ['project_id', 'key_name', 'en', 'ja', 'type'];
}
