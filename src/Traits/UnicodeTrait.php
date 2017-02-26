<?php
namespace cgTag\Strings\Traits;

trait UnicodeTrait
{
    /**
     * True if the string contains non-8-bit characters.
     *
     * @param $str
     * @return bool
     */
    public static function hasUnicode($str): bool
    {
        return mb_strlen($str, '8bit') != mb_strlen($str, 'utf-8');
    }

    /**
     * Ensures that string is encoded using UTF-8.
     *
     * @param string|null $str
     * @return string|null
     */
    public static function utf8(string $str = null)
    {
        if ($str === null) {
            return null;
        }
        ini_set('mbstring.substitute_character', "none");
        return mb_convert_encoding($str, 'UTF-8', 'UTF-8');
    }

}