<?php

namespace App\Http\Controllers;
use App\Models\Categories;
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
                'categories.slug')->get();

            return view('idea', ['url' => $idee]); 
        }

    }
}
