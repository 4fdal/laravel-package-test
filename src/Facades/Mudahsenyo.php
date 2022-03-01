<?php

namespace KodeIngatan\Mudahsenyo\Facades;

use Illuminate\Support\Facades\Facade;

class Mudahsenyo extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mudahsenyo';
    }
}
