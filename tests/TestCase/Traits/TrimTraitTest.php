<?php
namespace cgTag\Strings\Test\TestCase\Traits;

use cgTag\Strings\Test\BaseTestCase;

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
        $this->markTestSkipped();
    }

    /**
     * @return array
     */
    public function shouldTrimData(): array
    {
        return [

        ];
    }
}