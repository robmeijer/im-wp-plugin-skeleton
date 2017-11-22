<?php

namespace IM\Fabric\Package\WordPress;

class WordPress
{
    /**
     * Wrapper for the WordPress add_action function for hooks
     *
     * @param string $hook
     * @param Action $action
     */
    public function addAction($hook, Action $action)
    {
        add_action($hook, [$action, 'action'], $action->priority(), $action->arguments());
    }

    /**
     * Wrapper for the WordPress add_filter function for hooks
     *
     * @param string $hook
     * @param Filter $filter
     */
    public function addFilter($hook, Filter $filter)
    {
        add_filter($hook, [$filter, 'filter'], $filter->priority(), $filter->arguments());
    }

    /**
     * @param string $path
     * @param callable $callable
     */
    public function registerActivationHook($path, $callable)
    {
        register_activation_hook($path, $callable);
    }

    /**
     * @param string $path
     * @param callable $callable
     */
    public function registerDeactivationHook($path, $callable)
    {
        register_deactivation_hook($path, $callable);
    }
}
