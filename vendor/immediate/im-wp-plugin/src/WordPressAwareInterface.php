<?php

namespace IM\Fabric\Package\Plugin;

use IM\Fabric\Package\WordPress\WordPress;

interface WordPressAwareInterface
{
    /**
     * @param WordPress $wp
     */
    public function setWordPress(WordPress $wp);
}
