<?php

namespace IM\Fabric\Contracts;

interface AddFilterHandlerInterface
{
    /**
     * Handle an add_filter tag.
     *
     * @param mixed $param
     *
     * @return void
     */
    public function handle($param = null);
}
