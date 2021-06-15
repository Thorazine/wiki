<?php

namespace Thorazine\Location\Facades;

use Illuminate\Support\Facades\Facade;

class WikiFacade extends Facade {


    protected static function getFacadeAccessor() 
    { 
        return 'wiki'; 
    }
}
