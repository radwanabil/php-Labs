<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite7b56c39c89f28f7d275a3f2b59d8638
{
    public static $files = array (
        '10e3f99a2465abbabf9acce5f85de364' => __DIR__ . '/../..' . '/config.php',
        '979a59f074e11fb8ee7654333cb17f58' => __DIR__ . '/../..' . '/functions.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Count' => __DIR__ . '/../..' . '/classes/Counter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite7b56c39c89f28f7d275a3f2b59d8638::$classMap;

        }, null, ClassLoader::class);
    }
}
