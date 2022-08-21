<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        // return Post::find(1)->Category;die;
        return Category::find(1)->Category;die;
    }
    public function insert(){
        $newcategory = Category::create(['name'=>'motaskel']);
        Post::create([
        'dec'=>'is bad motaskel',
        'category_id'=>$newcategory->id
        ]);
    }

    public function ManyToMany(){
       return Role::find(1);die;
    }
}
