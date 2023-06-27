<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use phpDocumentor\Reflection\File;

class TblProject extends Model
{
    use HasFactory;

    protected $fillable = ['name_ja', 'name_en','email', 'project_code', 'slug', 'description_ja','description_en', 'start_date', 'end_date', 'remarks','status', 'created_by', 'updated_by'];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'tbl_project_users', 'tbl_project_id', 'user_id');
    }
}
