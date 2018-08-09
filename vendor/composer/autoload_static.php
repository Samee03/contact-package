<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita33cd69e9cb17655c6cdd53c048a119c
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Ultron\\Contact\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ultron\\Contact\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita33cd69e9cb17655c6cdd53c048a119c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita33cd69e9cb17655c6cdd53c048a119c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}