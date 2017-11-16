<?php

namespace IM\Fabric\Plugin\PluginSkeleton\Test;

use IM\Fabric\Package\Plugin\WordPressPlugin;
use IM\Fabric\Plugin\PluginSkeleton\PluginSkeletonPlugin;
use PHPUnit\Framework\TestCase;

class WordPressPluginTest extends TestCase
{
    public function test_Instance_of_WordPressPlugin()
    {
        $stub = $this->getMockForAbstractClass(PluginSkeletonPlugin::class);
        $this->assertInstanceOf(WordPressPlugin::class, $stub);
    }
}
