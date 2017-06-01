<?php

/**
 * Plugin Name: IM Search API Mock
 * Description: Plugin to enable mock implementation of Search Show and SSTM
 * Version: 0.1
 * Author: Immediate Media
 * Author URI: http://www.immediate.co.uk
 * License: GPL v2
 */
if (!defined('ABSPATH')) {
    return;
}

// If you're not using Composer for your whole project, but only the plugin,
// you can include the following to autoload the required classes.
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

$plugin = new IM\Fabric\Search\Mocks\MockPlugin();
$plugin->run();
