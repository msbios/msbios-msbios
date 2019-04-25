<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\AbstractFactoryInterface;

/**
 * Class ModuleAbstractFactory
 * @package MSBios
 */
class ModuleAbstractFactory extends Factory\ModuleFactory implements AbstractFactoryInterface
{
    /**
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @return bool|void
     */
    public function canCreate(ContainerInterface $container, $requestedName)
    {
        /** @var array $config */
        $config = $container->get('config');
        return in_array(ModuleInterface::class, class_implements($requestedName), true)
            || isset($config[$requestedName]);
    }

    /**
     * @param $an_array
     * @return ModuleAbstractFactory
     */
    public static function __set_state($an_array)
    {
        return new self();
    }
}
