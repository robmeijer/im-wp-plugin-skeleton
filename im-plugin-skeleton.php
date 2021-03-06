<?php

/**
 * Plugin Name: IM Plugin Skeleton
 * Description: Skeleton for new plugins.
 * Version: 0.1
 * Author: Immediate Media
 * Author URI: http://www.immediate.co.uk
 * License: GPL v2
 */

if (! defined('ABSPATH')) {
    return;
}

// The following lines of code allows you to specify a local '/views' directory
// Uncomment these lines if you wish to include views in the plugin
//if (! class_exists(\Timber\Timber::class)) {
//    return;
//}
//
//\Timber\Timber::$locations[] = __DIR__ . '/views';

$plugin = new IM\Fabric\Plugin\PluginSkeleton\PluginSkeletonPlugin();

// If you want to register activation and de-activation hooks, you can uncomment the following lines
// Make sure that your plugin has the required 'activate' and 'deactivate' methods
//register_activation_hook(__FILE__, [$plugin, 'activate']);
//register_deactivation_hook(__FILE__, [$plugin, 'deactivate']);

$plugin->run();
