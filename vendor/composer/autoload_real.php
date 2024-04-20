<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdd6dea12c15f4e6b9650cc77ca9c66ab
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

        spl_autoload_register(array('ComposerAutoloaderInitdd6dea12c15f4e6b9650cc77ca9c66ab', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdd6dea12c15f4e6b9650cc77ca9c66ab', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdd6dea12c15f4e6b9650cc77ca9c66ab::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}