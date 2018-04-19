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

// If you're not using Composer for your whole project, but only the plugin,
// you can include the following to autoload the required classes.
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
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
//$plugin->wordPress->registerActivationHook(__FILE__, [$plugin, 'activate']);
//$plugin->wordPress->registerDeactivationHook(__FILE__, [$plugin, 'deactivate']);

$plugin->run();
