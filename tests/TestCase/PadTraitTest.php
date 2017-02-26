<?php
namespace cgTag\Strings\Test\TestCase;

use cgTag\Strings\Test\BaseTestCase;
use cgTag\Strings\Traits\PadTrait;

class PadTraitTest extends BaseTestCase
{
    /**
     * @test
     * @dataProvider shouldLeftPadData
     * @param string $value
     * @param int $pad
     * @param string $return
     */
    public function shouldLeftPad(string $value, int $pad, string $return)
    {
        /** @var PadTrait $trait */
        $trait = $this->getMockBuilder(PadTrait::class)->getMockForTrait();
        $this->assertSame($return, $trait::leftPad($value, $pad));
    }

    /**
     * @return array
     */
    public function shouldLeftPadData(): array
    {
        return [
            ['abc', 5, '  abc'],
            ['', 5, '     '],
            ['     ', 5, '     '],
            ['', 0, ''],
            ['     ', 0, '     '],
            ['     ', 3, '     '],
            ['abc', 0, 'abc'],
            ['1234567890', 5, '1234567890']
        ];
    }

    /**
     * @test
     * @dataProvider shouldRightPadData
     * @param string $value
     * @param int $pad
     * @param string $return
     */
    public function shouldRightPad(string $value, int $pad, string $return)
    {
        /** @var PadTrait $trait */
        $trait = $this->getMockBuilder(PadTrait::class)->getMockForTrait();
        $this->assertSame($return, $trait::rightPad($value, $pad));
    }

    /**
     * @return array
     */
    public function shouldRightPadData(): array
    {
        return [
            ['abc', 5, 'abc  '],
            ['', 5, '     '],
            ['     ', 5, '     '],
            ['', 0, ''],
            ['     ', 0, '     '],
            ['     ', 3, '     '],
            ['abc', 0, 'abc'],
            ['1234567890', 5, '1234567890']
        ];
    }
}