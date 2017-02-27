<?php
namespace cgTag\Strings\Test\TestCase\Traits;

use cgTag\Strings\Test\BaseTestCase;
use cgTag\Strings\Traits\TokenTrait;

class TokenTraitTest extends BaseTestCase
{
    /**
     * @test
     * @dataProvider shouldReplaceTokensData
     * @param string $str
     * @param array $values
     * @param string $return
     */
    public function shouldReplaceTokens(string $str, array $values, string $return)
    {
        /** @var TokenTrait $trait */
        $trait = $this->getMockBuilder(TokenTrait::class)->getMockForTrait();
        $this->assertSame($return, $trait::replaceTokens($str, $values));
    }

    /**
     * @return array
     */
    public function shouldReplaceTokensData(): array
    {
        return [
            ['{title} ({year})', ['title' => 'Superman', 'year' => 2917], 'Superman (2917)']
        ];
    }
}