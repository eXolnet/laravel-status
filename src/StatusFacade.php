<?php namespace Exolnet\Status;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Exolnet\Status\Status
 */
class StatusFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'status';
    }
}
