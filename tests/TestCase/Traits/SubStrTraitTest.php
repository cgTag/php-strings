<?php
namespace cgTag\Strings\Test\TestCase\Traits;

use cgTag\Strings\Test\BaseTestCase;
use cgTag\Strings\Traits\SubStrTrait;

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
        /** @var SubStrTrait $trait */
        $trait = $this->getMockBuilder(SubStrTrait::class)->getMockForTrait();
        $this->assertSame($return, $trait::contains($haystack, $needle, $ignore_case));
    }

    /**
     * @return array
     */
    public function shouldContainsData(): array
    {
        return [
            ['man on the moon', 'Moon', true, true],
            ['man on the moon', 'Moon', false, false],
            ['man on the moon', 'OO', true, true],
            ['man on the moon', 'cat', true, false],
            ['man on the moon', 'cat', false, false],
            ['', 'Moon', true, false],
            ['', '', true, false],
            ['', '', false, false]
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
        /** @var SubStrTrait $trait */
        $trait = $this->getMockBuilder(SubStrTrait::class)->getMockForTrait();
        $this->assertSame($return, $trait::endsWith($haystack, $needle, $ignore_case));
    }

    /**
     * @return array
     */
    public function shouldEndsWithData(): array
    {
        return [
            ['filename.php', '.PHP', true, true],
            ['filename.php', '.PHP', false, false],
            ['filename.phpcs', '.PHP', true, false],
            ['filename.phpcs', '.php', false, false],
            ['abcdefg', 'bcd', true, false],
            ['abcdefg', 'abc', true, false],
            ['.php', '.php', true, true],
            ['', '.php', true, false],
            ['', '', false, false],
            ['', '', true, false]
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
        /** @var SubStrTrait $trait */
        $trait = $this->getMockBuilder(SubStrTrait::class)->getMockForTrait();
        $this->assertSame($return, $trait::startsWith($haystack, $needle, $ignore_case));
    }

    /**
     * @return array
     */
    public function shouldStartsWithData(): array
    {
        return [
            ['filename.php', 'FILENAME', true, true],
            ['filename.php', 'FILENAME', false, false],
            ['filename.php', '.PHP', true, false],
            ['filename.php', '.PHP', false, false],
            ['abcdefg', 'bcd', true, false],
            ['abcdefg', 'abc', false, true],
            ['.php', '.php', true, true],
            ['', '.php', true, false],
            ['', '', false, false],
            ['', '', true, false]
        ];
    }

}