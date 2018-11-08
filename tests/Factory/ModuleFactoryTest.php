<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Factory;

use MSBios\Factory\ModuleFactory;
use MSBios\Module;
use PHPUnit\Framework\TestCase;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\Test\Util\ModuleLoader;

/**
 * Class ModuleFactoryTest
 * @package MSBiosTest\Factory
 */
class ModuleFactoryTest extends TestCase
{
    public function testCallInvokeMethod()
    {
        /** @var FactoryInterface $instance */
        $instance = new ModuleFactory;
        $this->assertInstanceOf(FactoryInterface::class, $instance);

        /** @var ModuleLoader $loader */
        $loader = new ModuleLoader(require_once __DIR__ . '/../../config/application.config.php');
        $this->assertInternalType(
            'array',
            $instance->__invoke($loader->getServiceManager(), Module::class)
        );
    }
}
