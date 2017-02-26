<?php
namespace cgTag\Strings;

use cgTag\Strings\Traits\PadTrait;
use cgTag\Strings\Traits\SubStrTrait;
use cgTag\Strings\Traits\TokenTrait;
use cgTag\Strings\Traits\TrimTrait;
use cgTag\Strings\Traits\UnicodeTrait;

class Strings
{
    use PadTrait;
    use SubStrTrait;
    use TokenTrait;
    use TrimTrait;
    use UnicodeTrait;

    /**
     * Static usage only.
     */
    private function __construct()
    {
    }
}
