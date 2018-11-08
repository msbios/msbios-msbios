<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest;

use MSBios\Version;
use PHPUnit\Framework\TestCase;

/**
 * Class VersionTest
 * @package MSBiosTest
 */
class VersionTest extends TestCase
{
    /**
     * @throws \ReflectionException
     */
    public function testCallClass()
    {
        /** @var $stub */
        $stub = $this->getMockForAbstractClass(Version::class);
        $this->assertInternalType('string', $stub::VERSION);
    }
}
