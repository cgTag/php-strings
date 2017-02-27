<?php
namespace cgTag\Strings\Test\TestCase\Traits;

use cgTag\Strings\Test\BaseTestCase;

class UnicodeTraitTest extends BaseTestCase
{
    /**
     * @test
     * @dataProvider shouldHasUnicodeData
     * @param string|null $str
     * @param bool $return
     */
    public function shouldHasUnicode(string $str = null, bool $return)
    {
        $this->markTestSkipped();
    }

    /**
     * @return array
     */
    public function shouldHasUnicodeData(): array
    {
        return [

        ];
    }

    /**
     * @test
     * @dataProvider shouldUtf8Data
     * @param string|null $str
     * @param string $return
     */
    public function shouldUtf8(string $str = null, string $return = null)
    {
        $this->markTestSkipped();
    }

    /**
     * @return array
     */
    public function shouldUtf8Data(): array
    {
        return [

        ];
    }
}