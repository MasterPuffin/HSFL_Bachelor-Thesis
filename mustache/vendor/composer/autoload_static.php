<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita96a80368d8792046abc1398382974a8
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bluhm\\BaMustache\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bluhm\\BaMustache\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita96a80368d8792046abc1398382974a8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita96a80368d8792046abc1398382974a8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita96a80368d8792046abc1398382974a8::$classMap;

        }, null, ClassLoader::class);
    }
}
