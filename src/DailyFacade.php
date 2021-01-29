<?php

namespace Steadfastcollective\LaravelDailyco;

use Illuminate\Support\Facades\Facade;

class DailyFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Laravel_Dailyco';
    }
}
