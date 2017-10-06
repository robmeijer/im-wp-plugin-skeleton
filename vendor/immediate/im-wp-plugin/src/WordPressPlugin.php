<?php

namespace IM\Fabric\Package\Plugin;

use IM\Fabric\Package\Plugin\Handler\HandlerInterface;
use League\Container\Container;

abstract class WordPressPlugin extends Container
{
    public function __construct()
    {
        parent::__construct();

        $this->boot();
    }

    /**
     * Wrapper for the WordPress add_action function for hooks
     *
     * @param string $action
     * @param HandlerInterface $handler
     */
    public function addAction($action, HandlerInterface $handler)
    {
        add_action($action, [$handler, 'handle'], $handler->priority(), $handler->arguments());
    }

    /**
     * Wrapper for the WordPress add_filter function for hooks
     *
     * @param string $filter
     * @param HandlerInterface $handler
     */
    public function addFilter($filter, HandlerInterface $handler)
    {
        add_filter($filter, [$handler, 'handle'], $handler->priority(), $handler->arguments());
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
