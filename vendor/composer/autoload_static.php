<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit117d935ecee8b82e9511c432b9c1c52f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit117d935ecee8b82e9511c432b9c1c52f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit117d935ecee8b82e9511c432b9c1c52f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
