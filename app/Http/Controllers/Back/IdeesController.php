<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Back\VoyagerBreadController as BaseVoyagerBreadController;


class IdeesController extends VoyagerBreadController
{
    public function index(Request $request){
        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug);

        $this->authorize('browse', app($dataType->model_name));

        $getter = $dataType->server_side ? 'paginate' :  'get';

        $orderBy = $request->get('oreder_by');
        $sortOrder = $request->get('sort_order', null);

        $isServerSide = isset($dataType->server_side) && $dataType->server_side;
        $view = 'voyager::bread.browse';

        if ( view()->exists("voyager::$slug.browse")){
            $view = "voyager::$slug.browse";
        }

        return Voyager::view($view, compact(
           'dataType',
            'orderBy',
            'sortOrder',
            'isServerSide'
        ));
    }
}
