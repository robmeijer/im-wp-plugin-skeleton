# IM Plugin
This is a WordPress plugin base package that supports Dependency Injection and comes with an Event Handler.

## Install
Via Composer
``` bash
$ composer require immediate/im-wp-plugin
```

### Alternate installation methods
If the package is not available through a Composer package manager, you can also reference the package directly in your composer.json file.
``` json
"repositories": [
    {
        "type": "vcs",
        "url": "git@github.immediate.co.uk:WCP/im-wp-plugin.git"
    }
],
"require": {
    "immediate/im-wp-plugin": "^0.3"
}
```

## Requirements
- PHP >=5.4

## Getting Started
You can create a new plugin by extending the WordPressPlugin class. This requires the run() and boot() methods.
```php
<?php
// MyPlugin.php


namespace IM\MyPlugin;

use IM\Fabric\WordPressPlugin;

class MyPlugin extends WordPressPlugin
{
    /**
     * Define all your actions and WP hooks
     */
    public function run()
    {
        $this->addAction('init', function () {
            // This will execute on the init hook
        });
    }

    /**
     * Register any other services required by the plugin
     */
    protected function boot()
    {
        // You can optionally register any additional classes or services required by this plugin.
        // This will get executed first before running the plugin.        
    }
}

```
### Using a class as an event listener
Instead of using a closure, you can also create a Listener class as an event listener.

The Listener needs to either implement the ListenerInterface, or extend the AbstractListener class.

The documentation/example can be found here: http://event.thephpleague.com/2.0/listeners/classes/ 


Before using the listener, you need to add it to the container first. This can be done in the boot() method.
```php
protected function boot()
{
    $this->add(DoSomethingOnWpHook::class);
}

```
Once added, it can be used as the event listener in the run() method.
```php
$this->addAction('init', $this->get(DoSomethingOnWpHook::class));
```

## Finishing up
The plugin bootstrap file should contain as little code a possible.

Its only purpose is to initialise and run the Plugin class.
```php
<?php
// im-my-plugin.php

/**
 * Plugin Meta Data
 */

if (! defined('ABSPATH')) {
    return;
}

// If you're not using Composer for your whole project, but only the plugin,
// you can include the following to autoload the required classes.
if (file_exists( __DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

$plugin = new IM\MyPlugin\MyPlugin();
$plugin->run();

```
