<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest;

use MSBios\ModuleInterface;
use PHPUnit\Framework\TestCase;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;

/**
 * Class AbstractModuleTest
 * @package MSBiosTest
 */
abstract class AbstractModuleTest extends TestCase
{
    /**
     * @return mixed
     */
    abstract protected function create();

    /**
     *
     */
    public function testGetConfig()
    {
        /** @var ModuleInterface $instance */
        $instance = $this->create();

        if ($instance instanceof ModuleInterface) {
            $this->assertInternalType('array', $instance->getConfig());
        }
    }

    /**
     *
     */
    public function testGetAutoloaderConfig()
    {
        /** @var ModuleInterface $instance */
        $instance = $this->create();

        if ($instance instanceof ModuleInterface
            && $instance instanceof AutoloaderProviderInterface) {
            $this->assertInternalType('array', $instance->getAutoloaderConfig());
        }
    }
}
