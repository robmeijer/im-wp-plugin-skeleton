<?php

namespace IM\Fabric\Search\Mocks;

use IM\Fabric\WordPressPlugin;
use IM\Fabric\Search\Mocks\Handlers;

/**
 * Class MockPlugin
 * @package IM\Fabric\Search\Mocks
 */
class MockPlugin extends WordPressPlugin
{
    const PLUGIN_ID = 'im-search-api-mock';

    /**
     * Define all your actions and WP hooks
     */
    public function run()
    {
        register_activation_hook( __FILE__, 'plugin_activate' );
        $this->addAction('rest_api_init', $this->get(Handlers\InitHandler::class), 0);
    }

    public function plugin_activate()
    {
        // Require im-search-api
        if (!is_plugin_active('im-search-api/im-search-api.php') && current_user_can('activate_plugins')) {
            // Stop activation redirect and show error
            wp_die('IM Search API Plugin must be activated first');
        }
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
