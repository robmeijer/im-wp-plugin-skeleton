<?php

namespace IM\Fabric\Package\Plugin;

use IM\Fabric\Package\WordPress\WordPress;

trait WordPressAware
{
    /**
     * @var WordPress
     */
    protected $wp;

    /**
     * @param WordPress $wp
     */
    public function setWordPress(WordPress $wp)
    {
        $this->wp = $wp;
    }
}
