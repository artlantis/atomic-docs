<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita7e48a020531f69a895c4bb5eb9ecd91
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Leafo\\ScssPhp\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Leafo\\ScssPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/leafo/scssphp/src',
        ),
    );

    public static $classMap = array (
        'ComposerAutoloaderInita7e48a020531f69a895c4bb5eb9ecd91' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInita7e48a020531f69a895c4bb5eb9ecd91' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Leafo\\ScssPhp\\Base\\Range' => __DIR__ . '/..' . '/leafo/scssphp/src/Base/Range.php',
        'Leafo\\ScssPhp\\Block' => __DIR__ . '/..' . '/leafo/scssphp/src/Block.php',
        'Leafo\\ScssPhp\\Colors' => __DIR__ . '/..' . '/leafo/scssphp/src/Colors.php',
        'Leafo\\ScssPhp\\Compiler' => __DIR__ . '/..' . '/leafo/scssphp/src/Compiler.php',
        'Leafo\\ScssPhp\\Compiler\\Environment' => __DIR__ . '/..' . '/leafo/scssphp/src/Compiler/Environment.php',
        'Leafo\\ScssPhp\\Exception\\CompilerException' => __DIR__ . '/..' . '/leafo/scssphp/src/Exception/CompilerException.php',
        'Leafo\\ScssPhp\\Exception\\ParserException' => __DIR__ . '/..' . '/leafo/scssphp/src/Exception/ParserException.php',
        'Leafo\\ScssPhp\\Exception\\ServerException' => __DIR__ . '/..' . '/leafo/scssphp/src/Exception/ServerException.php',
        'Leafo\\ScssPhp\\Formatter' => __DIR__ . '/..' . '/leafo/scssphp/src/Formatter.php',
        'Leafo\\ScssPhp\\Formatter\\Compact' => __DIR__ . '/..' . '/leafo/scssphp/src/Formatter/Compact.php',
        'Leafo\\ScssPhp\\Formatter\\Compressed' => __DIR__ . '/..' . '/leafo/scssphp/src/Formatter/Compressed.php',
        'Leafo\\ScssPhp\\Formatter\\Crunched' => __DIR__ . '/..' . '/leafo/scssphp/src/Formatter/Crunched.php',
        'Leafo\\ScssPhp\\Formatter\\Debug' => __DIR__ . '/..' . '/leafo/scssphp/src/Formatter/Debug.php',
        'Leafo\\ScssPhp\\Formatter\\Expanded' => __DIR__ . '/..' . '/leafo/scssphp/src/Formatter/Expanded.php',
        'Leafo\\ScssPhp\\Formatter\\Nested' => __DIR__ . '/..' . '/leafo/scssphp/src/Formatter/Nested.php',
        'Leafo\\ScssPhp\\Formatter\\OutputBlock' => __DIR__ . '/..' . '/leafo/scssphp/src/Formatter/OutputBlock.php',
        'Leafo\\ScssPhp\\Node' => __DIR__ . '/..' . '/leafo/scssphp/src/Node.php',
        'Leafo\\ScssPhp\\Node\\Number' => __DIR__ . '/..' . '/leafo/scssphp/src/Node/Number.php',
        'Leafo\\ScssPhp\\Parser' => __DIR__ . '/..' . '/leafo/scssphp/src/Parser.php',
        'Leafo\\ScssPhp\\Server' => __DIR__ . '/..' . '/leafo/scssphp/src/Server.php',
        'Leafo\\ScssPhp\\Type' => __DIR__ . '/..' . '/leafo/scssphp/src/Type.php',
        'Leafo\\ScssPhp\\Util' => __DIR__ . '/..' . '/leafo/scssphp/src/Util.php',
        'Leafo\\ScssPhp\\Version' => __DIR__ . '/..' . '/leafo/scssphp/src/Version.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita7e48a020531f69a895c4bb5eb9ecd91::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita7e48a020531f69a895c4bb5eb9ecd91::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita7e48a020531f69a895c4bb5eb9ecd91::$classMap;

        }, null, ClassLoader::class);
    }
}
