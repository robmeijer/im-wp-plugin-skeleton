<?php

namespace IM\Fabric\Plugin\PluginSkeleton\Test;

use IM\Fabric\Package\Plugin\WordPressPlugin;
use IM\Fabric\Plugin\PluginSkeleton\PluginSkeletonPlugin;
use PHPUnit\Framework\TestCase;

class PluginSkeletonPluginTest extends TestCase
{
    public function testInstanceOfWordPressPlugin()
    {
        $plugin = $this->getMockForAbstractClass(PluginSkeletonPlugin::class);
        $this->assertInstanceOf(WordPressPlugin::class, $plugin);
    }
}
