<?php

namespace IM\Fabric\Package\Plugin\Test;

use IM\Fabric\Package\Plugin\WordPressPlugin;
use PHPUnit_Framework_TestCase;

class WordPressPluginTest extends PHPUnit_Framework_TestCase
{
    public function test_Instance_of_WordPressPlugin()
    {
        $stub = $this->getMockForAbstractClass(WordPressPlugin::class);
        $this->assertInstanceOf(WordPressPlugin::class, $stub);
    }
}
