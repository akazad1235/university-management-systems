<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\File;

class TblProject extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'project_code', 'slug', 'description', 'start_date', 'end_date', 'remarks','status', 'created_by', 'updated_by'];
}
