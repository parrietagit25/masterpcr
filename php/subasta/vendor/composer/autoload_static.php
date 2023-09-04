<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit39001c86ae04650c192382a36b025773
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PedroArrieta\\Subasta\\' => 21,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PedroArrieta\\Subasta\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'FPDF' => __DIR__ . '/..' . '/setasign/fpdf/fpdf.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit39001c86ae04650c192382a36b025773::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit39001c86ae04650c192382a36b025773::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit39001c86ae04650c192382a36b025773::$classMap;

        }, null, ClassLoader::class);
    }
}