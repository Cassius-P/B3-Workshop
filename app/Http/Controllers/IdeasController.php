<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ideas;
use App\Models\Categories;
use App\Models\CategoriesIdea;
use Illuminate\Support\Facades\DB;

class IdeasController extends Controller
{


    public function getIdeas(){
        $categories = Categories::select('categories.*')->get();
        $affichage = array();
        foreach ($categories as $category){
            $id=$category->id;
            $ideas= DB::table('categories_idea')->where('categories_idea.categories_id', '=', $id)->join('idees', 'categories_idea.ideas_id', '=', 'idees.id')->where('idees.statut', '=', "1")->rightJoin("votes", "idees.id", "=", "votes.idea_id")->count()->leftJoin(
                'users', 'idees.user_id', '=', 'users.id')->select(
                    'idees.id',
                    'idees.title',
                    'idees.description',
                    'idees.user_id',
                    'idees.category_id',
                    'idees.statut',
                    'idees.upvotes',
                    'users.name')->get();
            $title = $category->title;
            $affichage[$title] = $ideas;
        }

        return view('yann', [ 'affichage' => $affichage]);
    }
}
