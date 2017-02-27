<?php
namespace cgTag\Strings\Traits;

trait SubStrTrait
{
    /**
     * True if the substring is found in the target string.
     *
     * @param string $haystack
     * @param string $needle
     * @param bool $ignore_case
     * @return bool
     */
    public static function contains(string $haystack, string $needle, bool $ignore_case = false): bool
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
    public static function endsWith(string $haystack, string $needle, bool $ignore_case = false): bool
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
     * True if the substring is found at the start of the string.
     *
     * @param string $haystack
     * @param string $needle
     * @param bool $ignore_case
     * @return bool
     */
    public static function startsWith(string $haystack, string $needle, bool $ignore_case = false): bool
    {
        return $ignore_case
            ? strtolower(substr($haystack, 0, strlen($needle))) === strtolower($needle)
            : substr($haystack, 0, strlen($needle)) === $needle;
    }
}