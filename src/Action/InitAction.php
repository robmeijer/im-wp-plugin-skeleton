<?php

namespace IM\Fabric\Plugin\PluginSkeleton\Action;

use IM\Fabric\Package\WordPress\Action;

class InitAction extends Action
{
    /**
     * The priority property already has a default value of 10.
     * This property can omitted if the priority is the same.
     *
     * @var int
     */
    protected $priority = 10;

    /**
     * The arguments property already has a default value of 1.
     * This property can be omitted if the number of arguments is the same.
     *
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
