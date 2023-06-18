<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\File;

class TblProject extends Model
{
    use HasFactory;

    protected $fillable = ['name_ja', 'name_en','email', 'project_code', 'slug', 'description_ja','description_en', 'start_date', 'end_date', 'remarks','status', 'created_by', 'updated_by'];
}
