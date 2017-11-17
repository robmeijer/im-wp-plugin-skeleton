<?php

namespace IM\Fabric\Plugin\PluginSkeleton;

use IM\Fabric\Package\Plugin\WordPressPlugin;

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
        $this->addAction('init', $this->get(Action\DoSomething::class));
        $this->addFilter('init', $this->get(Filter\ChangeSomething::class));
    }

    /**
     * Register any other services required by the plugin
     * This method gets executed first
     */
    protected function boot()
    {
    }
}
