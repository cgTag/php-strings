<?php
namespace cgTag\Strings\Test\TestCase\Traits;

use cgTag\Strings\Test\BaseTestCase;
use cgTag\Strings\Traits\UnicodeTrait;

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
        /** @var UnicodeTrait $trait */
        $trait = $this->getMockBuilder(UnicodeTrait::class)->getMockForTrait();
        $this->assertSame($return, $trait::hasUnicode($str));
    }

    /**
     * @return array
     */
    public function shouldHasUnicodeData(): array
    {
        return [
            [null, false],
            ['', false],
            ['cgTag', false],
            ['外国語の学習と教授', true],
            ['Изучение и обучение иностранных языков', true],
            ['Tere Daaheng Aneng Karimah', false],
            ['語文教學・语文教学', true],
            ['Изучаване и Преподаване на Чужди Езици', true],
            ['Enseñanza y estudio de idiomas', true],
            ['ქართული ენის შესწავლა და სწავლება', true]
        ];
    }

    /**
     * @test
     * @dataProvider shouldUtf8Data
     * @param string|null $str
     * @param string $return
     * @todo This utf-8 function solved a specific problem for me, but I forgot what it was.
     */
    public function shouldUtf8(string $str = null, string $return = null)
    {
        /** @var UnicodeTrait $trait */
        $trait = $this->getMockBuilder(UnicodeTrait::class)->getMockForTrait();
        $this->assertSame($return, $trait::utf8($str));
    }

    /**
     * @return array
     */
    public function shouldUtf8Data(): array
    {
        return [
            [null, null],
            ['', ''],
            ['cgTag', 'cgTag'],
            ['外国語の学習と教授', '外国語の学習と教授'],
            ['Изучение и обучение иностранных языков', 'Изучение и обучение иностранных языков'],
            ['Tere Daaheng Aneng Karimah', 'Tere Daaheng Aneng Karimah'],
            ['語文教學・语文教学', '語文教學・语文教学'],
            ['Изучаване и Преподаване на Чужди Езици', 'Изучаване и Преподаване на Чужди Езици'],
            ['Enseñanza y estudio de idiomas', 'Enseñanza y estudio de idiomas'],
            ['ქართული ენის შესწავლა და სწავლება', 'ქართული ენის შესწავლა და სწავლება']
        ];
    }
}