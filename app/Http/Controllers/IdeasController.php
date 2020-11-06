<?php

namespace App\Http\Controllers;

use App\Models\Votes;
use Illuminate\Http\Request;
use App\Models\Ideas;
use App\Models\Categories;
use App\Models\CategoriesIdea;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IdeasController extends Controller
{
    public function getIdeas(){
        $categories = Categories::where('hidden', '=', true)->select('categories.*')->get();
        $affichage = array();
        foreach ($categories as $category){
            $id=$category->id;
            $ideas= DB::table('categories_idea')->where('categories_idea.categories_id', '=', $id)->join('categories', 'categories_idea.categories_id', '=', 'categories.id')->leftJoin('idees', 'categories_idea.ideas_id', '=', 'idees.id')->where('idees.statut', '=', "1")->rightJoin(
                'users', 'idees.user_id', '=', 'users.id')->select(
                    'idees.id',
                    'idees.title',
                    'idees.description',
                    'idees.user_id',
                    'idees.statut',
                    'categories.slug',
                    'users.name')->limit(9)->get();


            foreach($ideas as $idea){
                $idea->vote = Votes::where('idea_id', '=', $idea->id)->count();
            }

            $title = $category->title;
            $affichage[$title][0] = $category->slug;
            $affichage[$title][1] = $ideas;


        }
        if (Auth::check()){
            $id = Auth::user()->id;
            return view('ideas', [ 'affichage' => $affichage, 'id' => $id]);
        }else{
            return view('ideas', [ 'affichage' => $affichage]);
        }
    }
}

