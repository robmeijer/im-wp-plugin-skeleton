# IM Plugin Skeleton
This is a WordPress plugin skeleton to help you get started with a new plugin based on im-wp-plugin.

## Getting Started
To get started, you simply need to clone the repository into a new directory for your plugin.
```bash
$ git clone git@github.immediate.co.uk:WCP/im-wp-plugin-skeleton.git <im-new-plugin>
```

## Updating Placeholders
The skeleton contains various placeholders that need to be updated for your plugin.
### Composer - composer.json
Replace "PluginSkeleton" with the namespace of the service your plugin will provide, e.g. Subscriptions.
```json
// composer.json

"autoload": {
    "psr-4": {
        "IM\\PluginSkeleton\\":"src"
    }
},
"autoload-dev": {
    "psr-4": {
        "IM\\PluginSkeleton\\Test\\":"tests/src"
    }
},
```
### WP Plugin Bootstrap
The WP plugin bootstrap file, 'im-plugin-skeleton.php' should be renamed for your plugin, e.g. 'im-subscriptions.php'.
There are also various elements within the bootstrap file that need to be updated, detailed below.
##### Plugin Metadata
The plugin metadata needs to be updated to match your new plugin.
##### Plugin Initialisation
```php
$plugin = new IM\PluginSkeleton\PluginSkeletonPlugin();
```
### Plugin Class
*TODO*

## Finishing up
*TODO*
