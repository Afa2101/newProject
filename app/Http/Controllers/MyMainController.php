<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class MyMainController extends Controller
{
    public function index(){
        return view('main');
    }

}
