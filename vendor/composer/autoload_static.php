<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e08fe8a99d0023efb6e8e99c4898cc6
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Ubiquity\\' => 9,
        ),
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'A' => 
        array (
            'Ajax\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ubiquity\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmv/ubiquity-attributes/src/Ubiquity',
            1 => __DIR__ . '/..' . '/phpmv/ubiquity/src/Ubiquity',
            2 => __DIR__ . '/..' . '/phpmv/ubiquity-debug/src/Ubiquity',
            3 => __DIR__ . '/..' . '/phpmv/ubiquity-dev/src/Ubiquity',
            4 => __DIR__ . '/..' . '/phpmv/ubiquity-webtools/src/Ubiquity',
        ),
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Ajax\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmv/php-mv-ui/Ajax',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/app',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Cz\\Git\\GitException' => __DIR__ . '/..' . '/czproject/git-php/src/IGit.php',
        'Cz\\Git\\GitRepository' => __DIR__ . '/..' . '/czproject/git-php/src/GitRepository.php',
        'Cz\\Git\\IGit' => __DIR__ . '/..' . '/czproject/git-php/src/IGit.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e08fe8a99d0023efb6e8e99c4898cc6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e08fe8a99d0023efb6e8e99c4898cc6::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit1e08fe8a99d0023efb6e8e99c4898cc6::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit1e08fe8a99d0023efb6e8e99c4898cc6::$classMap;

        }, null, ClassLoader::class);
    }
}
