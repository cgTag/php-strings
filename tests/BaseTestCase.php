<?php
namespace cgTag\Strings\Test;

use PHPUnit\Framework\TestCase;

abstract class BaseTestCase extends TestCase
{
    /**
     * List of trait classes.
     *
     * @var array|null
     */
    public static $_traits = null;

    /**
     * Gets a list of all traits for this project.
     *
     * @return string[]
     */
    public static function getTraitClasses(): array
    {
        if (!static::$_traits) {
            $ds = DIRECTORY_SEPARATOR;
            $path = dirname(__DIR__) . $ds . 'src' . $ds . 'Traits';

            static::$_traits = array_filter(array_map(function ($file) use ($ds, $path) {
                if ($file === '.' || $file === '..') {
                    return null;
                }
                $fullPath = $path . $ds . $file;
                if (!is_file($fullPath) || strlen($file) <= 4 || substr($file, -4) !== '.php') {
                    return null;
                }
                return 'cgTag\\Strings\\Traits\\' . substr($file, 0, -4);
            }, scandir($path) ?: []));
        }
        return static::$_traits;
    }
}
