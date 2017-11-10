<?php

namespace IM\Fabric\Package\Plugin;

use League\Container\Container;

abstract class WordPressPlugin extends Container
{
    public function __construct()
    {
        parent::__construct();

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
