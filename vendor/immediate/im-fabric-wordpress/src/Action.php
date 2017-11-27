<?php

namespace IM\Fabric\Package\WordPress;

abstract class Action
{
    /**
     * @var int
     */
    protected $arguments = 1;

    /**
     * @var int
     */
    protected $priority = 10;

    /**
     * @param array ...$args
     */
    abstract public function action(...$args);

    /**
     * @return int
     */
    public function arguments()
    {
        return $this->arguments;
    }

    /**
     * @return int
     */
    public function priority()
    {
        return $this->priority;
    }
}
