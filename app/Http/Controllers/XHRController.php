<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class XHRController extends Controller{

    public function newIdea(Request $request){
        $sent = json_decode($request->get('info'));
        if($sent){
            $module = $sent->module;
            if($module === 'idea'){
                $message = insertIdea($sent);
            }elseif($module === 'like'){
                $message = insertLike($sent);
            }
            return response()->json(['message' => $message], 200);
        }else{
            return response()->json(['message' => 'error'], 200);
        }
    }

    private function insertIdea($sent){
        $titre = $sent->titre;
        $desc = $sent->desc;
        $user_id = $sent->user_id;

        try 
        { 
            DB::table('idees')->insertGetId(
                ['title' => $titre, 'description' => $desc, 'user_id' => $user_id]
            );

            return 'ok';
        } 
        catch(\Illuminate\Database\QueryException $e){ 
            return $e->getMessage(); 
        } 
        
    }

    private function insertLike($sent){
        $prop_id = $sent->prop_id;
        $user_id = $sent->user_id;

        try { 
            DB::table('votes')->insertGetId(
                ['idea_id' => $prop_id, 'user_id' => $user_id]
            );
            return 'ok';
            
        } 
        catch(\Illuminate\Database\QueryException $e){ 
             return $e->getMessage(); 
        }

        
    }
}
