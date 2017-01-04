<?php

namespace IM\Fabric\Tests;

use IM\Fabric\WordPressPlugin;
use PHPUnit_Framework_TestCase;

class WordPressPluginTest extends PHPUnit_Framework_TestCase
{
    public function test_Instance_of_WordPress_plugin()
    {
        $stub = $this->getMockForAbstractClass(WordPressPlugin::class);
        $this->assertInstanceOf(WordPressPlugin::class, $stub);
    }
}
