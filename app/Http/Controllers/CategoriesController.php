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
        $category = Categories::where('slug', '=', $url);
        if($category===NULL){
            abort(404);
            return false;
        }else{
            $category = Categories::where('slug', '=', $url)->select(
                'categories.id',
                'categories.title',
                'categories.description',
                'categories.image'
            )->first();

            $ideas = DB::table('idees')->join('categories',
                'categories.id',
                '=',
                'idees.category_id'
            )->where('categories.id','=',$category->id
            )->where('idees.statut','=',1
            )->select('idees.*')->get();

            foreach($ideas as $idea){
                $idea->vote = Votes::where('idea_id', '=', $idea->id)->count();
            }

            return view('keita', ['ideas' => $ideas, 'category' => $category]);
        }
    }


}
