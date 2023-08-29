<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit05af668b55d4d4be0b2fc8573e6ae6d8
{
    public static $files = array (
        '7213bbee05d6174911c709393e2fdbd0' => __DIR__ . '/../..' . '/app/functions.php',
        '0f6f4f351fb7eec5b78e9c5ee941966e' => __DIR__ . '/../..' . '/app/router.php',
        'f703339a54477abe5ddf5766fccf1623' => __DIR__ . '/../..' . '/app/config.php',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit05af668b55d4d4be0b2fc8573e6ae6d8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit05af668b55d4d4be0b2fc8573e6ae6d8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit05af668b55d4d4be0b2fc8573e6ae6d8::$classMap;

        }, null, ClassLoader::class);
    }
}
