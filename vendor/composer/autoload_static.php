<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf3e9ce143addcc277aa74e04a7f02bd2
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sonawap\\Paystack\\Transaction\\' => 29,
            'Sonawap\\Paystack\\Customer\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sonawap\\Paystack\\Transaction\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Sonawap\\Paystack\\Customer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf3e9ce143addcc277aa74e04a7f02bd2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf3e9ce143addcc277aa74e04a7f02bd2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf3e9ce143addcc277aa74e04a7f02bd2::$classMap;

        }, null, ClassLoader::class);
    }
}
