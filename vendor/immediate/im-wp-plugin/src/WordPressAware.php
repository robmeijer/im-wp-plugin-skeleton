<?php

namespace IM\Fabric\Package\Plugin;

use IM\Fabric\Package\WordPress\Action;
use IM\Fabric\Package\WordPress\Filter;
use IM\Fabric\Package\WordPress\WordPress;

trait WordPressAware
{
    /**
     * Wrapper for the WordPress add_action function for hooks
     *
     * @param string $hook
     * @param Action $action
     */
    public function addAction($hook, Action $action)
    {
        $this->get(WordPress::class)->addAction($hook, $action);
    }

    /**
     * Wrapper for the WordPress add_filter function for hooks
     *
     * @param string $hook
     * @param Filter $filter
     */
    public function addFilter($hook, Filter $filter)
    {
        $this->get(WordPress::class)->addFilter($hook, $filter);
    }
}
