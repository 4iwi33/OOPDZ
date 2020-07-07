<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6c3bb0ee91324e7d7b0b916af96aee0e
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TexLab\\MyDB\\' => 12,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TexLab\\MyDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/texlab/mydb/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6c3bb0ee91324e7d7b0b916af96aee0e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6c3bb0ee91324e7d7b0b916af96aee0e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
