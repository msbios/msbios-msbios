<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Factory;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\AbstractFactoryInterface;
use MSBios\ModuleInterface;

/**
 * Class ModuleAbstractFactory
 * @package MSBios\Factory
 */
class ModuleAbstractFactory extends ModuleFactory implements AbstractFactoryInterface
{
    /**
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @return bool
     */
    public function canCreate(ContainerInterface $container, $requestedName): bool
    {
        /** @var array $config */
        $config = $container->get('config');
        return class_exists($requestedName)
            && in_array(ModuleInterface::class, class_implements($requestedName), true)
            || isset($config[$requestedName]);
    }

    /**
     * @param $an_array
     * @return ModuleAbstractFactory
     */
    public static function __set_state($an_array): self
    {
        return new self();
    }
}
