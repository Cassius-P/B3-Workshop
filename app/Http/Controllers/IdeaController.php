<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use App\Models\Votes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function index($category, $idea){
        $cat = Categories::where('slug', '=', $category)->first();
        if($cat == null){
            abort(404);
            return false;
        }else{

            $idee = DB::table('categories_idea')->where('categories_idea.ideas_id', '=', $idea)->join('categories', 'categories_idea.categories_id', '=', 'categories.id')->leftJoin(
                'idees', 'categories_idea.ideas_id', '=', 'idees.id')->where('idees.id', '=', $idea)->select(
                'idees.id',
                'idees.title',
                'idees.description',
                'idees.user_id',
                'idees.statut',
                'categories.slug')->first();


            if ($idee->statut == 0) {
                abort(404);
                return false;
            }else{
                $idee->vote = DB::table('votes')->where('idea_id', '=', $idea)->count();
                $name = DB::table('users')->where('users.id', '=', $idee->user_id)->select('users.name')->first();
                $idee->user = $name->name;

                $liked = false;
                if(Auth::check()){
                    $vote = Votes::where([['idea_id', '=', $idee->id ], ['user_id', '=', Auth::user()->id]]);
                    if($vote != null){
                        $liked = true;
                    }
                }

                return view('idea', ['idee' => $idee, 'liked' => $liked]);
            }

        }

    }
}
