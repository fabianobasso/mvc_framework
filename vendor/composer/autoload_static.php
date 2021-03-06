<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc0a1113dd3e3cb5eb3935edaabe43ae
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc0a1113dd3e3cb5eb3935edaabe43ae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc0a1113dd3e3cb5eb3935edaabe43ae::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdc0a1113dd3e3cb5eb3935edaabe43ae::$classMap;

        }, null, ClassLoader::class);
    }
}
