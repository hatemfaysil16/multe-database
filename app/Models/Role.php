<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
protected $connection="mysql2";
protected $table = 'role';
protected $fillable = ['role_name'];

    public function user()
    {
        return $this->belongsToMany(User::class,'users_role','role_id','user_id');
    }



}
