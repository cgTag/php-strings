<?php
namespace cgTag\Strings\Traits;

trait TrimTrait
{
    /**
     * Trims a string, but if it's a null returns an empty string.
     *
     * @param string|null $value
     * @return string
     */
    public static function trim($value)
    {
        return is_null($value) ? '' : trim($value);
    }
}