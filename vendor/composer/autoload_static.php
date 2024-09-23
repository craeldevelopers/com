<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd7356be8dfc6aebb4a21e663279eb63d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd7356be8dfc6aebb4a21e663279eb63d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd7356be8dfc6aebb4a21e663279eb63d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd7356be8dfc6aebb4a21e663279eb63d::$classMap;

        }, null, ClassLoader::class);
    }
}