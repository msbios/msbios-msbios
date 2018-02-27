<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class AbstractModuleFactory
 * @package MSBios\Factory
 */
abstract class AbstractModuleFactory implements FactoryInterface
{
    /**
     * @return mixed Module::class
     */
    abstract protected function getModuleName();

    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return mixed
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return $container->get('config')[$this->getModuleName()];
    }
}
