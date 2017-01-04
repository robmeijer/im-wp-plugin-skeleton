<?php

namespace IM\Fabric\Events;

use League\Event\Emitter;

class WordPressEventEmitter
{
    /**
     * Event Emitter
     *
     * @var \League\Event\Emitter
     */
    protected $emitter;

    /**
     * @param \League\Event\Emitter $emitter
     */
    public function __construct(Emitter $emitter)
    {
        $this->emitter = $emitter;
    }

    /**
     * Emit an event
     *
     * @param string|\League\Event\EventInterface $event
     * @param $param
     */
    public function emit($event, $param = null)
    {
        $this->emitter->emit($event, $param);
    }

    /**
     * Add a listener for an event
     *
     * @param string $event
     * @param \League\Event\ListenerInterface|callable $listener
     * @param int $priority
     */
    public function when($event, $listener, $priority = Emitter::P_NORMAL)
    {
        $this->emitter->addOneTimeListener($event, $listener, $priority);
    }

    /**
     * Wrapper for the WordPress add_action function for hooks
     *
     * @param string $action
     * @param \League\Event\ListenerInterface|callable $listener
     * @param int $priority
     */
    public function addAction($action, $listener, $priority = Emitter::P_NORMAL)
    {
        $this->when('wp_' . $action, $listener, $priority);

        add_action($action, function () use ($action) {
            $this->emit('wp_' . $action);
        });
    }

    /**
     * Wrapper for the WordPress add_filter function for hooks
     *
     * @param string $filter
     * @param callable $listener
     * @param int $priority
     */
    public function addFilter($filter, $listener, $priority = Emitter::P_NORMAL)
    {
        add_filter($filter, [$listener, 'handle'], $priority);
    }
}
