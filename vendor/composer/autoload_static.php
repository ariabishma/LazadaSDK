<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54215e3037b3c52d9d7e070e6354d77d
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bishma\\LazadaSDK\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bishma\\LazadaSDK\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit54215e3037b3c52d9d7e070e6354d77d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit54215e3037b3c52d9d7e070e6354d77d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit54215e3037b3c52d9d7e070e6354d77d::$classMap;

        }, null, ClassLoader::class);
    }
}
