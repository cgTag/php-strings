<?php
namespace cgTag\Strings\Test\TestCase\Traits;

use cgTag\Strings\Test\BaseTestCase;

class SubStrTraitTest extends BaseTestCase
{
    /**
     * @test
     * @dataProvider shouldContainsData
     * @param string $haystack
     * @param string $needle
     * @param bool $ignore_case
     * @param bool $return
     */
    public function shouldContains(string $haystack, string $needle, bool $ignore_case, bool $return)
    {
        $this->markTestSkipped();
    }

    /**
     * @return array
     */
    public function shouldContainsData(): array
    {
        return [

        ];
    }

    /**
     * @test
     * @dataProvider shouldEndsWithData
     * @param string $haystack
     * @param string $needle
     * @param bool $ignore_case
     * @param bool $return
     */
    public function shouldEndsWith(string $haystack, string $needle, bool $ignore_case, bool $return)
    {
        $this->markTestSkipped();
    }

    /**
     * @return array
     */
    public function shouldEndsWithData(): array
    {
        return [

        ];
    }

    /**
     * @test
     * @dataProvider shouldStartsWithData
     * @param string $haystack
     * @param string $needle
     * @param bool $ignore_case
     * @param bool $return
     */
    public function shouldStartsWith(string $haystack, string $needle, bool $ignore_case, bool $return)
    {
        $this->markTestSkipped();
    }

    /**
     * @return array
     */
    public function shouldStartsWithData(): array
    {
        return [

        ];
    }

}