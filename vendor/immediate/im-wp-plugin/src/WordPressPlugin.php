<?php

namespace IM\Fabric;

use IM\Fabric\Providers\EventServiceProvider;
use IM\Fabric\Events\WordPressEventEmitter;
use League\Container\Container;
use League\Event\Emitter;

abstract class WordPressPlugin extends Container
{
    public function __construct()
    {
        parent::__construct();

        // Register the Event services
        $this->addServiceProvider(new EventServiceProvider());

        // Register any other services required by the plugin
        $this->boot();
    }

    /**
     * Wrapper for the WordPress add_action function for hooks
     *
     * @param string $action
     * @param \League\Event\ListenerInterface|callable $listener
     * @param int $priority
     * @return mixed
     */
    public function addAction($action, $listener, $priority = Emitter::P_NORMAL)
    {
        return $this->get(WordPressEventEmitter::class)->addAction($action, $listener, $priority);
    }

    /**
     * Wrapper for the WordPress add_filter function for hooks
     *
     * @param string $filter
     * @param \League\Event\ListenerInterface|callable $listener
     * @param int $priority
     * @return mixed
     */
    public function addFilter($filter, $listener, $priority = Emitter::P_NORMAL)
    {
        return $this->get(WordPressEventEmitter::class)->addFilter($filter, $listener, $priority);
    }

    /**
     * Define all your actions and WP hooks
     *
     * @return mixed
     */
    abstract public function run();

    /**
     * Register any other services required by the plugin
     */
    protected function boot() {}
}
