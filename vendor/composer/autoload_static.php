<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbaae7a03d123d42ba91675872e211344
{
    public static $files = array (
        '63f75f9580ee51d8dd0ac47096ca7aa7' => __DIR__ . '/../..' . '/app/Support/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbaae7a03d123d42ba91675872e211344::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbaae7a03d123d42ba91675872e211344::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbaae7a03d123d42ba91675872e211344::$classMap;

        }, null, ClassLoader::class);
    }
}
