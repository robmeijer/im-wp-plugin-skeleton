<?php

namespace IM\Fabric\Search\Mocks\Handlers;

use League\Event\AbstractListener;
use League\Event\EventInterface;

class InitHandler extends AbstractListener
{
    /**
     * Handle an event.
     *
     * @param EventInterface $event
     *
     * @return void
     */
    public function handle(EventInterface $event)
    {
        define("IM_SEARCH_API_MOCK", true);
    }
}
