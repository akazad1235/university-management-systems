<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    const permissions = [
        'view' => 'view',
        'create' => 'create',
        'edit' => 'edit',
        'delete' => 'delete',
        'approve' => 'approve'
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    static public function getPermissionGroupBy(){
       return DB::table('permissions')->select('group_name as name')->groupBy('group_name')->get();
    }
    static public function getPermissionByGroupName($groupName){
        return DB::table('permissions')->select('name')->where('group_name', $groupName)->get();
    }
    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(TblProject::class, 'tbl_project_users', 'tbl_project_id', 'user_id');
    }
}
