<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Ideas;
use App\Models\CategoriesIdea;
use App\Models\Votes;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller{
    public function index($url){
        $category = Categories::where('slug', '=', $url)->first();
        if($category == null){
            abort(404);
            return false;
        }else{
            $category = Categories::where('slug', '=', $url)->select(
                'categories.id',
                'categories.title',
                'categories.description',
                'categories.image',
                'categories.slug'
            )->first();
            $id=$category->id;
            $ideas= DB::table('categories_idea')->where('categories_idea.categories_id', '=', $id)->join('idees', 'categories_idea.ideas_id', '=', 'idees.id')->where('idees.statut', '=', "1")->leftJoin(
                'users', 'idees.user_id', '=', 'users.id')->select(
                'idees.id',
                'idees.title',
                'idees.description',
                'idees.user_id',
                'idees.statut',
                'users.name')->get();

            foreach($ideas as $idea){
                $idea->vote = Votes::where('idea_id', '=', $idea->id)->count();
            }

            return view('category', ['ideas' => $ideas, 'category' => $category]);
        }
    }


}
