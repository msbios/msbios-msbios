<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest;

use MSBios\AutoloaderAwareInterface;
use MSBios\Module;
use MSBios\ModuleInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class ModuleTest
 * @package MSBiosTest
 */
class ModuleTest extends TestCase
{
    /** @var Module */
    protected $instance;

    /**
     * @constructor
     */
    protected function setUp()
    {
        parent::setUp();
        $this->instance = new Module;
    }

    /**
     *
     */
    public function testGetConfig()
    {
        $this->assertInstanceOf(ModuleInterface::class, $this->instance);
        $this->assertInternalType('array', $this->instance->getConfig());
    }

    /**
     *
     */
    public function testGetAutoloaderConfig()
    {
        $this->assertInstanceOf(AutoloaderAwareInterface::class, $this->instance);
        $this->assertInternalType('array', $this->instance->getAutoloaderConfig());
    }
}
