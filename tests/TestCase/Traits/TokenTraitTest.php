<?php
namespace cgTag\Strings\Test\TestCase\Traits;

use cgTag\Strings\Test\BaseTestCase;

class TokenTraitTest extends BaseTestCase
{
    /**
     * @test
     * @dataProvider shouldReplaceTokensData
     * @param string $str
     * @param array $values
     * @param string $tokenize
     * @param string $return
     */
    public function shouldReplaceTokens(string $str, array $values, string $tokenize, string $return)
    {
        $this->markTestSkipped();
    }

    /**
     * @return array
     */
    public function shouldReplaceTokensData(): array
    {
        return [

        ];
    }
}