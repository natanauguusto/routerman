<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0a57643517ca071a3e5353717991ae4
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Natan\\Routerman\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Natan\\Routerman\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite0a57643517ca071a3e5353717991ae4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite0a57643517ca071a3e5353717991ae4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite0a57643517ca071a3e5353717991ae4::$classMap;

        }, null, ClassLoader::class);
    }
}
