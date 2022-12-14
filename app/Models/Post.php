<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
protected $connection="mysql2";
protected $table="posts";
protected $fillable = ['dec','category_id'];

    public function Category()
    {
        return $this->setConnection('mysql')->belongsTo(Category::class, 'category_id');
    }
    
}