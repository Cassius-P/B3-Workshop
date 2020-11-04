<?php

namespace Connect;

use Illuminate\Support\Facades\Facade;

class ConnectFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Connect::class;
    }
}
