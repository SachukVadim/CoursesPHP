<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit5f4361a0ff1ad100a702404e1a816def
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

        spl_autoload_register(array('ComposerAutoloaderInit5f4361a0ff1ad100a702404e1a816def', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit5f4361a0ff1ad100a702404e1a816def', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit5f4361a0ff1ad100a702404e1a816def::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
