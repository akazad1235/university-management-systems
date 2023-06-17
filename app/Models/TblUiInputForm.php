<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblUiInputForm extends Model
{
    use HasFactory;

    protected $fillable = ['key_name', 'label_ja', 'label_en', 'placeholder_ja', 'placeholder_en', 'type'];
}
