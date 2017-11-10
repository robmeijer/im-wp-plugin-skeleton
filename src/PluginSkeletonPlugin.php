<?php

namespace IM\Fabric\Plugin\PluginSkeleton;

use IM\Fabric\Package\Plugin\WordPressPlugin;
use IM\Fabric\Package\WordPress\Hook;
use IM\Fabric\Package\WordPress\WordPress;

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
        $this->get(WordPress::class)->addAction(Hook::INIT, $this->get(Action\InitAction::class));
    }

    /**
     * Register any other services required by the plugin
     * This method gets executed first
     */
    protected function boot()
    {
        $this->add(WordPress::class);
        $this->add(Action\InitAction::class);
    }
}
