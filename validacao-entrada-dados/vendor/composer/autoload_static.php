<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5943550a0c0aefbcda06ea14b625bdbf
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'R' => 
        array (
            'Respect\\Validation\\' => 19,
        ),
        'A' => 
        array (
            'Aura\\Filter\\_Config\\' => 20,
            'Aura\\Filter\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Respect\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/respect/validation/library',
        ),
        'Aura\\Filter\\_Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/aura/filter/config',
        ),
        'Aura\\Filter\\' => 
        array (
            0 => __DIR__ . '/..' . '/aura/filter/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5943550a0c0aefbcda06ea14b625bdbf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5943550a0c0aefbcda06ea14b625bdbf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
