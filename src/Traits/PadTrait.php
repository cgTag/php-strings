<?php
namespace cgTag\Strings\Traits;

trait PadTrait
{
    /**
     * Adds left padding to the string.
     *
     * @param string $value
     * @param int $length
     * @return string
     */
    public static function leftPad(string $value, int $length): string
    {
        return str_repeat(' ', max(0, $length - strlen($value))) . $value;
    }

    /**
     * Adds right padding to the string.
     *
     * @param string $value
     * @param int $length
     * @return string
     */
    public static function rightPad(string $value, int $length): string
    {
        return $value . str_repeat(' ', max(0, $length - strlen($value)));
    }

}