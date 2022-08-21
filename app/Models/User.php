<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
protected $table="users";
protected $fillable = ['users_name'];

    public function role()
    {
        return $this->belongsToMany(Role::class,'users_role','role_id','user_id');
    }

}
