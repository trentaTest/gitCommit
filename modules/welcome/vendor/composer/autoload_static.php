<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite5ef183fe986bd8b375ab293c4129699
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OnBoarding\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OnBoarding\\' => 
        array (
            0 => __DIR__ . '/../..' . '/OnBoarding',
        ),
    );

    public static $classMap = array (
        'OnBoarding\\Configuration' => __DIR__ . '/../..' . '/OnBoarding/Configuration.php',
        'OnBoarding\\OnBoarding' => __DIR__ . '/../..' . '/OnBoarding/OnBoarding.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite5ef183fe986bd8b375ab293c4129699::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite5ef183fe986bd8b375ab293c4129699::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite5ef183fe986bd8b375ab293c4129699::$classMap;

        }, null, ClassLoader::class);
    }
}
