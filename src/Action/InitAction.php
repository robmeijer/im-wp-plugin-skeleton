<?php

namespace IM\Fabric\Plugin\PluginSkeleton\Action;

use IM\Fabric\Package\WordPress\Action;

class InitAction extends Action
{
    /**
     * @var int
     */
    protected $priority = 10;

    /**
     * @var int
     */
    protected $arguments = 1;

    /**
     * @param array ...$args
     *
     * @return mixed
     */
    public function action(...$args)
    {
        return;
    }
}
