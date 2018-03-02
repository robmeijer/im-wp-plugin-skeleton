<?php

namespace IM\Fabric\Plugin\PluginSkeleton;

use IM\Fabric\Package\Plugin\WordPressPlugin;

class PluginSkeletonPlugin extends WordPressPlugin
{
    const PLUGIN_ID = 'im-plugin-skeleton';

    /**
     * The 'run' method is the core of the plugin functionality
     * It acts as a "Controller Action" method
     */
    public function run()
    {
        $this->wp()->addAction('example_wp_hook', $this->get(Action\DoSomething::class));
        $this->wp()->addFilter('another_example_wp_hook', $this->get(Filter\ChangeSomething::class));
    }
}
