<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc4aa45b8b0617124cf61c11f51636cb2
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsehub' => 
            array (
                0 => __DIR__ . '/..' . '/msankhala/parsehub-php/src',
            ),
        ),
        'H' => 
        array (
            'Httpful' => 
            array (
                0 => __DIR__ . '/..' . '/nategood/httpful/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc4aa45b8b0617124cf61c11f51636cb2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc4aa45b8b0617124cf61c11f51636cb2::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc4aa45b8b0617124cf61c11f51636cb2::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
