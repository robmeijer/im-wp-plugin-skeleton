<?php

namespace IM\Fabric\Package\WordPress;

abstract class Filter
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
     *
     * @return mixed
     */
    abstract public function filter(...$args);

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
