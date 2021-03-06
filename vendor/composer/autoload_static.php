<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6af1c11e8cf8b87023d42f8cfa6e060d
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6af1c11e8cf8b87023d42f8cfa6e060d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6af1c11e8cf8b87023d42f8cfa6e060d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
