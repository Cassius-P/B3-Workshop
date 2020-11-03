<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ideas;
use App\Models\Categories;
use App\Models\CategoriesIdea;
use Illuminate\Support\Facades\DB;

class IdeasController extends Controller
{
    public function index(){
        $this->getIdeas();
    }

    public function getIdeas(){
        $categories = Categories::select('categories.id')->get();
        $affichage = array();
        foreach ($categories as $category){
            $id=$category->id;
            $ideas= DB::table('categories_idea')->where('categories_idea.categories_id', '=', $id)->join('idees', 'categories_idea.ideas_id', '=', 'idees.id')->join(
                'users', 'idees.users_id', '=', 'users.id')->where('idees.statut', '=', 1)->select(
                    'idees.id',
                    'idees.title',
                    'idees.description',
                    'idees.user_id',
                    'idees.category_id',
                    'idees.statut',
                    'idees.upvotes',
                    'users.name')->get();
            $affichage[$category.title] = $ideas;
        }

        return view('yann', ['affichage'=>$affichage]);
    }
}
