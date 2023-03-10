<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit906c6d324c0b2f532402d9e7fc786cba
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'APP\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'APP\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit906c6d324c0b2f532402d9e7fc786cba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit906c6d324c0b2f532402d9e7fc786cba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit906c6d324c0b2f532402d9e7fc786cba::$classMap;

        }, null, ClassLoader::class);
    }
}
