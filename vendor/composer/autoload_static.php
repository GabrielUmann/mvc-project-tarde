<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit033ce934a534ea60e40c5deba27a5652
{
    public static $files = array (
        'e4ece0e463259e8c788b0fbc18116d99' => __DIR__ . '/../..' . '/source/Boot/Config.php',
        '1b0ff9557ed59b4dcc5b5e459f5f9d34' => __DIR__ . '/../..' . '/source/Boot/Helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
        'C' => 
        array (
            'CoffeeCode\\Router\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'CoffeeCode\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/router/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit033ce934a534ea60e40c5deba27a5652::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit033ce934a534ea60e40c5deba27a5652::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit033ce934a534ea60e40c5deba27a5652::$classMap;

        }, null, ClassLoader::class);
    }
}
