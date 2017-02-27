<?php
namespace cgTag\Strings\Test\TestCase\Traits;

use cgTag\Strings\Test\BaseTestCase;
use cgTag\Strings\Traits\TrimTrait;

class TrimTraitTest extends BaseTestCase
{
    /**
     * @test
     * @dataProvider shouldTrimData
     * @param string|null $value
     * @param string|null $return
     */
    public function shouldTrim($value, $return)
    {
        /** @var TrimTrait $trait */
        $trait = $this->getMockBuilder(TrimTrait::class)->getMockForTrait();
        $this->assertSame($return, $trait::trim($value));
    }

    /**
     * @return array
     */
    public function shouldTrimData(): array
    {
        return [
            ['', ''],
            [null, ''],
            [' abc ', 'abc'],
            ['     ', '']
        ];
    }
}