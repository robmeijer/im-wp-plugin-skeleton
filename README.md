# IM Plugin Skeleton
This is a WordPress plugin skeleton to help you get started with a new plugin based on [immediate/im-wp-plugin](https://github.immediate.co.uk/WCP-Packages/im-wp-plugin).

## Getting Started
To get started, you simply need to clone the repository into a new directory for your plugin.
```bash
$ git clone git@github.immediate.co.uk:WCP/im-wp-plugin-skeleton.git <im-new-plugin>
```

## Updating Placeholders
The skeleton contains various placeholders that need to be updated for your plugin.
### Composer - composer.json
Replace `PluginSkeleton` with the namespace of the service your plugin will provide.
```json
// composer.json

"autoload": {
    "psr-4": {
        "IM\\Fabric\\Plugin\\MyService\\":"src/"
    }
},
"autoload-dev": {
    "psr-4": {
        "IM\\Fabric\\Plugin\\MyService\\Test\\":"tests/"
    }
},
```

### WP Plugin Bootstrap
The WP plugin bootstrap file, `im-plugin-skeleton.php` should be renamed for your plugin, e.g. `im-my-service.php`.
There are also various elements within the bootstrap file that need to be updated, detailed below.

##### Plugin Metadata
The plugin metadata needs to be updated to match your new plugin.

##### Plugin Initialisation
This needs to be updated to match the namespace and name of your main plugin class.

Example:
```php
$plugin = new IM\Fabric\Plugin\MyService\MyServicePlugin();
```

### Plugin Class
The main plugin class is located in `/src`, and is typically named `<Service>Plugin` with the namespace `IM\Fabric\Plugin\<Service>\<Service>Plugin`, e.g. `IM\Fabric\Plugin\MyService\MyServicePlugin`.
The file name should be the same as the class name, e.g. `SubscriptionsPlugin.php`.
   
Please refer to [www.php-fig.org/psr/psr-4](http://www.php-fig.org/psr/psr-4) for more information.

## Basic Usage

### Actions
The actions are dedicated classes that should be triggered for your WP action hooks.
These should be located in `/src/Action` with the namespace `IM\Fabric\Plugin\<Service>\Action` e.g. `IM\Fabric\Plugin\MyService\Action`.
Each action should extend `IM\Fabric\Package\WordPress\Action\Action`, which requires a public method called `action()`.
The Action can be resolved out of the container as follows:
```php
<?php
// MyServicePlugin.php

...
public function run()
{
    $this->wordPress->addAction('init', $this->get(Action\DoSomething::class));
}
```

### Filters
The filters are almost identical to the actions, and are dedicated classes that should be triggered for your WP hooks that support filters.\
These should be located in `/src/Filter` with the namespace `IM\Fabric\Plugin\<Service>\Filter` e.g. `IM\Fabric\Plugin\MyService\Filter`.\
Each filter should extend `IM\Fabric\Package\WordPress\Filter\Filter`, which requires a public method called `filter()`.

### Nested Actions/Filters
If you wish to have additional calls to `AddAction()` and `AddFilter()` from your Action or Filter, your class needs to implement
the `WordPressAwareInterface` interface, and import the `WordPressAwareTrait` trait.

This will make a `WordPress` service available, which can be accessed at `$this->wordPress`, e.g. `$this->wordPress->addAction()`.

### Services
Any service classes you use should ideally be injected through the constructor, using type-hinting. The container will then be able to auto-resolve the service.

## Finishing Up

### Plugin Git Repository
When starting fresh with a new plugin, you first need to delete the existing `.git` directory, and initialise a new repository using `git init`.

### Jenkins Integration
The plugin skeleton comes with an example `Jenkinsfile.dist` file.

Once the plugin is ready to trigger Jenkins builds, this file can be renamed to `Jenkinsfile`, and be updated if necessary.

By default, this will run PHPUnit tests, and generate Allure reports for these tests. If any commits are made to the plugin's `develop` branch, it will also trigger a build of `wcp-core`.

## Testing

### PHPUnit Tests
In order to run your tests locally, you need to run the following commands in your plugin directory:
```bash
$ composer install
$ ./vendor/bin/phpunit
```

### Testing WordPress
Any class that makes direct calls to any WordPress functions, should make use of the WP_Mock testing framework.

The framework offers its own base `\WP_Mock\Tools\TestCase` class, which should be extended instead of PHPUnit's `TestCase` class.

The WP_Mock framework uses the Mockery testing framework to make its assertions. However, this isn't compatible with PHPUnit by default. In order for PHPUnit to recognise the Mockery assertions, you need to use Mockery's `MockeryPHPUnitIntegration` trait as follows:

```php
<?php

class MyTestCase extends \WP_Mock\Tools\TestCase
{
    use \Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
}
```
