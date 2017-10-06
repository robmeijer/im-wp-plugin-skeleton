<?php

namespace IM\Fabric\Package\Plugin\Handler;

interface HandlerInterface
{
    /**
     * @param array ...$args
     *
     * @return mixed
     */
    public function handle(...$args);

    /**
     * @return int
     */
    public function priority();

    /**
     * @return int
     */
    public function arguments();
}
