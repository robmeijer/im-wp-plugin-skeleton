<?php

namespace IM\Fabric\Package\Plugin;

use IM\Fabric\Package\WordPress\WordPress;
use League\Container\Container;
use League\Container\ReflectionContainer;

abstract class WordPressPlugin extends Container
{
    use WordPressAware;

    /**
     * @var string
     */
    protected $path;

    /**
     * WordPressPlugin constructor.
     *
     * @param string $path
     */
    public function __construct($path)
    {
        parent::__construct();

        $this->path = $path;

        // Enable auto-wiring in the container
        $this->delegate(new ReflectionContainer());

        // Use inflection to inject WordPress dependency through method injection
        $this->inflector(WordPressAwareInterface::class)
             ->invokeMethod('setWordPress', [WordPress::class]);

        // Add WordPress
        $this->wp = $this->get(WordPress::class);

        // Execute any code that's required before activating the plugin
        $this->boot();

        // Register the activation and deactivation hooks
        $this->wp->registerActivationHook($this->path, [$this, 'activate']);
        $this->wp->registerDeactivationHook($this->path, [$this, 'deactivate']);
    }

    /**
     * Define all your actions and WP hooks
     *
     * @return mixed
     */
    abstract public function run();

    /**
     * This will be called when the plugin is activated
     */
    public function activate() {}

    /**
     * This will be called when the plugin is deactivated
     */
    public function deactivate() {}

    /**
     * Register any other services required by the plugin
     */
    protected function boot() {}
}
