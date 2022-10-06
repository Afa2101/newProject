<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class MyAboutController extends Controller
{
    public function index(){
        return view('about');
    }

}
