<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit57d1f49e09d98bfbf3b5564273d83ced
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Process\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Mustache' => 
            array (
                0 => __DIR__ . '/..' . '/mustache/mustache/src',
            ),
        ),
        'K' => 
        array (
            'Knp\\Snappy' => 
            array (
                0 => __DIR__ . '/..' . '/knplabs/knp-snappy/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit57d1f49e09d98bfbf3b5564273d83ced::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit57d1f49e09d98bfbf3b5564273d83ced::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit57d1f49e09d98bfbf3b5564273d83ced::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
