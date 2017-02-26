<?php
namespace cgTag\Strings\Test\TestCase;

use cgTag\Strings\Strings;

class StringsTest extends BaseTestCase
{
    /**
     * @test
     */
    public function shouldHaveAllTraits()
    {
        $class = new \ReflectionClass(Strings::class);
        $traits = $class->getTraitNames();
        foreach (static::getTraitClasses() as $trait) {
            $this->assertTrue(in_array($trait, $traits));
        }
    }

    /**
     * @test
     */
    public function shouldHavePrivateConstructor()
    {
        $class = new \ReflectionClass(Strings::class);
        $this->assertTrue($class->getConstructor()->isPrivate());
    }
}
