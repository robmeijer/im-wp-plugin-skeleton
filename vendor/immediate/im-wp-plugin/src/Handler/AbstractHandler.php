<?php

namespace IM\Fabric\Package\Plugin\Handler;

abstract class AbstractHandler implements HandlerInterface
{
    /**
     * WordPress Hook
     */
    const HOOK = '';

    /**
     * @var int
     */
    protected $priority = null;

    /**
     * @var int
     */
    protected $arguments = null;

    /**
     * @return int
     */
    public function priority()
    {
        return $this->priority;
    }

    /**
     * @return int
     */
    public function arguments()
    {
        return $this->arguments;
    }
}
