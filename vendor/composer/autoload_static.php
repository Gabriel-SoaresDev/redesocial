<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit672b170bb741ff9be6083cd028918895
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Slim\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
        'D' => 
        array (
            'DEV\\Controllers\\' => 16,
            'DEV\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'DEV\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/system/controllers',
        ),
        'DEV\\' => 
        array (
            0 => __DIR__ . '/../..' . '/system/models',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit672b170bb741ff9be6083cd028918895::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit672b170bb741ff9be6083cd028918895::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit672b170bb741ff9be6083cd028918895::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit672b170bb741ff9be6083cd028918895::$classMap;

        }, null, ClassLoader::class);
    }
}
