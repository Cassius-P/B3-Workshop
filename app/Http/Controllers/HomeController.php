<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ideas;
use App\Models\Votes;

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
        $ideas= Votes::where('votes.user_id', '=', $id)->join(
            'idees', 'votes.idea_id', '=', 'idees.id')->where('idees.statut', '=', "1")->leftJoin('categories_ideas', 'votes.idea_id', '=', "categories_idea.ideas_id")->rightJoin('categories', 'categories_idea.categories_id', '=', 'categories.id')->select(
            'idees.id',
            'idees.title',
            'idees.description',
            'idees.user_id',
            'idees.statut',
            'categories.slug',
            'categories.title'
        )->get();

        return $ideas;
    }

    private function getPosted($id){
        $ideas = Ideas::where('idees.user_id', '=', $id)->select('idees.*')->get();
        return $ideas;
    }
}
