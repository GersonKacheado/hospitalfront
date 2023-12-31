<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcea93fc338a6b2ea2781ba0aaf677416
{
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcea93fc338a6b2ea2781ba0aaf677416::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcea93fc338a6b2ea2781ba0aaf677416::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcea93fc338a6b2ea2781ba0aaf677416::$classMap;

        }, null, ClassLoader::class);
    }
}
