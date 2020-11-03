<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ideas;
use App\Models\CategoriesIdea;

class IdeasController extends Controller
{

    /*Fonction appelant l'affichage des idees par categorie*/
    public function index(){
        $this->getIdeas();
    }

    /*Fonction permettant d'afficher les idées par catégorie*/
    public function getIdeas(){

        /*Récupération des id categories et instanciation d'une variable affichage pour récupérer le resultat final*/
        $categories = Categories::select('categories.id')->get();
        $affichage = array();

        /*Boucle joignant les idées aux categories et les auteurs aux idées puis remplissage de affichage pour afficher les idees par categorie*/
        foreach ($categories as $category){
            $id=$category.id;
            $ideas= DB::table('categories_idea')->where('categories_idea.categories.id', '=', $id)->join('idees', 'categories_idea.ideas_id', '=', 'idees.id')->join(
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
