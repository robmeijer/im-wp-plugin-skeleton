<?php

namespace IM\Fabric\Package\Plugin;

use IM\Fabric\Package\WordPress\WordPress;
use League\Container\Container;

abstract class WordPressPlugin extends Container
{
    use WordPressAware;

    public function __construct()
    {
        parent::__construct();

        $this->add(WordPress::class);

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
