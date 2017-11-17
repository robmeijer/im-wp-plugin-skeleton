<?php

namespace IM\Fabric\Package\Plugin;

use League\Container\Container;
use League\Container\ReflectionContainer;

abstract class WordPressPlugin extends Container
{
    use WordPressAware;

    public function __construct()
    {
        parent::__construct();

        // Enable auto-wiring in the container
        $this->delegate(new ReflectionContainer());

        $this->boot();
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
