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
        $ideas= DB::table('users')->where('users.id', '=', $id)->Join(
            'idees', 'idees.user_id', '=', 'users.id')->where('idees.statut', '=', "1")->select(
            'idees.id',
            'idees.title',
            'idees.description',
            'idees.user_id',
            'idees.statut',
            'users.name')->get();
        
            return $ideas;
    }

    private function getPosted($id){
        //
    }
}
