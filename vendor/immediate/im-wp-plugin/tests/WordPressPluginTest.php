<?php

namespace IM\Fabric\Package\Plugin\Test;

use IM\Fabric\Package\Plugin\WordPressPlugin;
use PHPUnit\Framework\TestCase;

class WordPressPluginTest extends TestCase
{
    public function test_Instance_of_WordPressPlugin()
    {
        $stub = $this->getMockForAbstractClass(WordPressPlugin::class);
        $this->assertInstanceOf(WordPressPlugin::class, $stub);
    }
}
