<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite60bd6d66e4705a5c93110911fb8cc2d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Abraham\\TwitterOAuth\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Abraham\\TwitterOAuth\\' => 
        array (
            0 => __DIR__ . '/..' . '/abraham/twitteroauth/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite60bd6d66e4705a5c93110911fb8cc2d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite60bd6d66e4705a5c93110911fb8cc2d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
