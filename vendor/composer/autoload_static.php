<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit71b6954a3ee60f3aaee3783c0500cee9
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Config\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Config',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Models',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit71b6954a3ee60f3aaee3783c0500cee9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit71b6954a3ee60f3aaee3783c0500cee9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit71b6954a3ee60f3aaee3783c0500cee9::$classMap;

        }, null, ClassLoader::class);
    }
}
