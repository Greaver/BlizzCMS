<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit514561bf87f1b405ac61047b5335c45d
{
    public static $files = array (
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
        'V' => 
        array (
            'VisualAppeal\\' => 13,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'L' => 
        array (
            'Laizerox\\' => 9,
        ),
        'D' => 
        array (
            'Desarrolla2\\Cache\\' => 18,
        ),
        'C' => 
        array (
            'Composer\\Semver\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'VisualAppeal\\' => 
        array (
            0 => __DIR__ . '/..' . '/visualappeal/php-auto-update/src',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Laizerox\\' => 
        array (
            0 => __DIR__ . '/..' . '/laizerox/php-wowemu-auth/src',
        ),
        'Desarrolla2\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/desarrolla2/cache/src',
        ),
        'Composer\\Semver\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/semver/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit514561bf87f1b405ac61047b5335c45d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit514561bf87f1b405ac61047b5335c45d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit514561bf87f1b405ac61047b5335c45d::$classMap;

        }, null, ClassLoader::class);
    }
}
