<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf61f5b26c8fd618b146cf3fe58a737e0
{
    public static $prefixesPsr0 = array (
        'W' => 
        array (
            'Webling' => 
            array (
                0 => __DIR__ . '/..' . '/usystems/webling-api-php/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitf61f5b26c8fd618b146cf3fe58a737e0::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
