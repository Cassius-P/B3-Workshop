<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::user()->id;
        $liked = $this->getLikes($id);
        $posted = $this->getPosted($id);
        return view('home', ["liked" => $liked, "posted" => $posted]);
    }

    private function getLikes($id){
        //
    }

    private function getPosted($id){
        //
    }
}
