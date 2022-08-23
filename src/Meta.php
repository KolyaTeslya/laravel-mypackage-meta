<?php

namespace Teslya\Meta;

use Illuminate\Support\Facades\Facade;

class Meta extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'meta';
    }
}
