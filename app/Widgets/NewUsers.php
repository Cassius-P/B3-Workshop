<?php

namespace App\Widgets;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;
use App\Models\Users;

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
        $users = Users::select(
            'users.id',
            'users.created_at')->get();

        $count = 0;
        foreach ($users as $user){
            $now = Carbon::now();

            $date = Carbon::parse($user->created_at);

            if($date->diffInWeeks($now) == 0){
                $count++;
            }
        }
        $string = 'nouveaux utilisateurs';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-leaf',
            'title'  => "{$count} {$string}",
            'text'   => "{$count} utilisateurs se sont engagés pour innover ensemble cette semaine",
            'button' => [
                'text' => 'Accéder aux utilisateurs',
                'link' => route('voyager.users.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/03.jpg'),
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