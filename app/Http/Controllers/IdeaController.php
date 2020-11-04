<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function index($url){
        return view('idea', ['url' => $url]);
    }
}
