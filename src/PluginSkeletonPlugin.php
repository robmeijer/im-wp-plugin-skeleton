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
     * Define all your actions and WP hooks
     */
    public function run()
    {
        $this->get(WordPress::class)->addAction(Hook::INIT, $this->get(Action\InitAction::class));
    }

    /**
     * Register any other services required by the plugin
     */
    protected function boot()
    {
        // You can optionally register any additional classes or services required by this plugin.
        // This will get executed first before running the plugin.

        $this->add(WordPress::class);
        $this->add(Action\InitAction::class);
    }
}
