<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit513c8e7c0e668a92dba28b68a657c9f0
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Shagor\\Contact789\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Shagor\\Contact789\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit513c8e7c0e668a92dba28b68a657c9f0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit513c8e7c0e668a92dba28b68a657c9f0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit513c8e7c0e668a92dba28b68a657c9f0::$classMap;

        }, null, ClassLoader::class);
    }
}
