<?php

namespace IM\PluginSkeleton;

use IM\Fabric\WordPressPlugin;
use IM\PluginSkeleton\Handlers;

/**
 * Class PluginSkeletonPlugin
 * @package IM\PluginSkeleton
 */
class PluginSkeletonPlugin extends WordPressPlugin
{
    const PLUGIN_ID = 'im-plugin-skeleton';

    /**
     * Define all your actions and WP hooks
     */
    public function run()
    {
        $this->addAction('init', $this->get(Handlers\InitHandler::class));
    }

    /**
     * Register any other services required by the plugin
     */
    protected function boot()
    {
        // You can optionally register any additional classes or services required by this plugin.
        // This will get executed first before running the plugin.

        $this->add(Handlers\InitHandler::class);
    }
}
