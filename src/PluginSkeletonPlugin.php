<?php

namespace IM\Fabric\Plugin\PluginSkeleton;

use IM\Fabric\Package\Plugin\WordPressPlugin;
use IM\Fabric\Package\WordPress\Hook;

/**
 * Class PluginSkeletonPlugin
 * @package IM\PluginSkeleton
 */
class PluginSkeletonPlugin extends WordPressPlugin
{
    const PLUGIN_ID = 'im-plugin-skeleton';

    /**
     * The 'run' method is the core of the plugin functionality
     * It acts as a "Controller Action" method
     */
    public function run()
    {
        $this->addAction(Hook::INIT, $this->get(Action\DoSomething::class));
        $this->addFilter(Hook::INIT, $this->get(Filter\ChangeSomething::class));
    }

    /**
     * Register any other services required by the plugin
     * This method gets executed first
     */
    protected function boot()
    {
        $this->add(Action\DoSomething::class);
        $this->add(Filter\ChangeSomething::class);
    }
}
