<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit61c8e585f55fb2ed1b094ed31035a571
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'L' => 
        array (
            'League\\Event\\' => 13,
            'League\\Container\\' => 17,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
            'IM\\Fabric\\Search\\Mocks\\' => 23,
            'IM\\Fabric\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'League\\Event\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/event/src',
        ),
        'League\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/container/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'IM\\Fabric\\Search\\Mocks\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'IM\\Fabric\\' => 
        array (
            0 => __DIR__ . '/..' . '/immediate/im-wp-plugin/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit61c8e585f55fb2ed1b094ed31035a571::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit61c8e585f55fb2ed1b094ed31035a571::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
