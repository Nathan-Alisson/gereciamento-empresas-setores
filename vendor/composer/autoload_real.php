<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInited3eaa9219c39a5372ecc5a50848613f
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInited3eaa9219c39a5372ecc5a50848613f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInited3eaa9219c39a5372ecc5a50848613f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInited3eaa9219c39a5372ecc5a50848613f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
