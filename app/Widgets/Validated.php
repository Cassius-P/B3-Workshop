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
        $nonValidated = Ideas::where('statut', '=', 0)->select(
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
        $string = trans_choice('voyager::dimmer.ideas', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-news',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.ideas_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('voyager::dimmer.ideas_link_text'),
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
