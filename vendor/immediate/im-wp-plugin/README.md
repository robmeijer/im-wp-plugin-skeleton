# IM Plugin
This is a WordPress plugin base package that supports Dependency Injection and comes with OO wrappers for basic WordPress functionality.

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
        "url": "git@github.immediate.co.uk:WCP-Packages/im-wp-plugin.git"
    },
    {
        "type": "vcs",
        "url": "git@github.immediate.co.uk:WCP-Packages/im-fabric-wordpress.git"
    }
],
"require": {
    "immediate/im-wp-plugin": "^1.0"
}
```

## Requirements
- PHP >=5.6

## Getting Started
You can create a new plugin by extending the WordPressPlugin class. This requires the run() method.
```php
<?php
// MyPlugin.php

namespace IM\Fabric\Plugin\MyService;

use IM\Fabric\Package\Plugin\WordPressPlugin;

class MyPlugin extends WordPressPlugin
{
    /**
     * Define all your actions and WP hooks
     */
    public function run()
    {
        $this->wp->addAction('example_wp_hook', $this->get(Action\DoSomething::class));
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
## Actions and Filters
Instead of using closures, it is recommended to use classes for actions and filters.

There is a base `Action` class and a base `Filter` class available which can be extended.

These require `action()` and `filter()` methods respectively, that will contain most of the logic.

If you wish to have additional calls to `AddAction()` and `AddFilter()`, your class needs to implement
the `WordPressAwareInterface` interface, and import the `WordPressAware` trait.

This will make a `WordPress` service available, which can be accessed at `$this-wp`, e.g. `$this->wp->addAction()`.

Example:
```php
<?php
// DoSomething.php

namespace IM\Fabric\Plugin\MyService\Action;

use IM\Fabric\Package\Plugin\WordPressAware;
use IM\Fabric\Package\Plugin\WordPressAwareInterface;
use IM\Fabric\Package\WordPress\Action;

class DoSomething extends Action implements WordPressAwareInterface
{
    use WordPressAware;
    
    private $doSomethingElse;
    
    public function __construct(DoSomethingElse $doSomethingElse)
    {
        $this->doSomethingElse = $doSomethingElse;        
    }
    
    public function action(...$args)
    {
        $this->wp->addAction('another_example_wp_hook', $this->doSomethingElse);
    }
}

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

$plugin = new IM\Fabric\Plugin\MyService\MyPlugin();
$plugin->run();

```
