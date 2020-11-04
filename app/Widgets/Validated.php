<?php

namespace App\Widgets;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;
use App\Models\Ideas;

class Validated extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $nonValidated = Ideas::where('statut', '=', 1)->select(
            'idees.id',
            'idees.created_at',
            'idees.statut')->get();

        $count = 0;
        foreach ($nonValidated as $idea){
            $now = Carbon::now();

            $date = Carbon::parse($idea->created_at);

            if($date->diffInWeeks($now) == 0){
                $count++;
            }
        }
        $idée = "idée";
        $validée ="validée";
        $avoir = "a";
        if($count > 1){
            $idée +="s";
            $validée+="s";
            $avoir = "ont";
        }
        $string = $idée.' '.$validée;

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-trash',
            'title'  => "{$count} {$string}",
            'text'   => "{$count} {$idée} {$avoir} été {$validée} cette semaine",
            'button' => [
                'text' => 'Accéder aux idées',
                'link' => route('voyager.idees.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Voyager::model('User'));
    }
}
