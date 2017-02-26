<?php
namespace cgTag\Strings;

class Strings
{
    /**
     * True if the substring is found in the target string.
     *
     * @param string $haystack
     * @param string $needle
     * @param bool $ignore_case
     * @return bool
     */
    public static function contains(string $haystack, string $needle, $ignore_case = false): bool
    {
        return $ignore_case
            ? stripos($haystack, $needle) !== false
            : strpos($haystack, $needle) !== false;
    }

    /**
     * True if the target string ends with the substring.
     *
     * @param string $haystack
     * @param string $needle
     * @param bool $ignore_case
     * @return bool
     */
    public static function endsWith(string $haystack, string $needle, $ignore_case = false)
    {
        $length = strlen($needle);
        if ($length == 0) {
            return true;
        }
        return $ignore_case
            ? strtolower(substr($haystack, -$length)) === strtolower($needle)
            : substr($haystack, -$length) === $needle;
    }

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
     * Adds left padding to the string.
     *
     * @param string $value
     * @param int $length
     * @return string
     */
    public static function leftPad(string $value, int $length)
    {
        return str_repeat(' ', max(0, $length - strlen($value))) . $value;
    }

    /**
     * Replaces the tokens found in the string with from the list of key/value
     * pairs.
     *
     * @param string $str
     * @param array $values
     * @param string $tokenize
     * @return string
     */
    public static function replaceTokens($str, array $values, $tokenize = "{%s}")
    {
        foreach ($values as $key => $value) {
            if (is_string($value) || is_numeric($value)) {
                $str = str_replace(sprintf($tokenize, $key), $value, $str);
            }
        }
        return $str;
    }

    /**
     * Adds right padding to the string.
     *
     * @param string $value
     * @param int $length
     * @return string
     */
    public static function rightPad(string $value, int $length)
    {
        return $value . str_repeat(' ', max(0, $length - strlen($value)));
    }

    /**
     * True if the substring is found at the start of the string.
     *
     * @param string $haystack
     * @param string $needle
     * @param bool $ignore_case
     * @return bool
     */
    public static function startsWith(string $haystack, string $needle, $ignore_case = false)
    {
        return $ignore_case
            ? strtolower(substr($haystack, 0, strlen($needle))) === strtolower($needle)
            : substr($haystack, 0, strlen($needle)) === $needle;
    }

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
