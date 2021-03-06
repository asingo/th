<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9f3fb660084631de26b8c13f85326b20
{
    public static $files = array (
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
        'R' => 
        array (
            'RouterOS\\' => 9,
        ),
        'D' => 
        array (
            'DivineOmega\\SSHConnection\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'RouterOS\\' => 
        array (
            0 => __DIR__ . '/..' . '/evilfreelancer/routeros-api-php/src',
        ),
        'DivineOmega\\SSHConnection\\' => 
        array (
            0 => __DIR__ . '/..' . '/divineomega/php-ssh-connection/src',
        ),
    );

    public static $classMap = array (
        'JJG\\Ping' => __DIR__ . '/..' . '/geerlingguy/ping/JJG/Ping.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9f3fb660084631de26b8c13f85326b20::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9f3fb660084631de26b8c13f85326b20::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9f3fb660084631de26b8c13f85326b20::$classMap;

        }, null, ClassLoader::class);
    }
}
