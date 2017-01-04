<?php

namespace IM\Fabric\Providers;

use IM\Fabric\Events\WordPressEventEmitter;
use League\Container\ServiceProvider\AbstractServiceProvider;
use League\Event\Emitter;

class EventServiceProvider extends AbstractServiceProvider
{
    /**
     * Specify the keys that this ServiceProvider makes available in the container
     *
     * @var array
     */
    protected $provides = [
        WordPressEventEmitter::class,
        Emitter::class,
    ];

    /**
     * Register the Event Service Provider
     */
    public function register()
    {
        $this->getContainer()->share(WordPressEventEmitter::class)
             ->withArgument(Emitter::class);

        $this->getContainer()->add(Emitter::class);
    }
}
