<?php

namespace IM\Fabric\Plugin\PluginSkeleton\Handler;

use IM\Fabric\Package\Plugin\Handler\AbstractHandler;

class InitHandler extends AbstractHandler
{
    /**
     * WordPress Hook
     */
    const HOOK = 'init';

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
    public function handle(...$args)
    {
        return;
    }
}
