<?php

namespace AYashenkov\Acl;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AYashenkov\Acl\AclClass
 */
class AclFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'acl';
    }
}
