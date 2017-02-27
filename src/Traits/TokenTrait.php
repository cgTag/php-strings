<?php
namespace cgTag\Strings\Traits;

trait TokenTrait
{
    /**
     * Replaces the tokens found in the string with from the list of key/value
     * pairs.
     *
     * @param string $str
     * @param array $values
     * @param string $tokenize
     * @return string
     */
    public static function replaceTokens(string $str, array $values, string $tokenize = "{%s}"): string
    {
        foreach ($values as $key => $value) {
            if (is_string($value) || is_numeric($value)) {
                $str = str_replace(sprintf($tokenize, $key), $value, $str);
            }
        }
        return $str;
    }
}