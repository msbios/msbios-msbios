<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\AbstractFactoryInterface;
use Zend\Stdlib\ArrayUtils;

/**
 * Class ModuleAbstractFactory
 * @package MSBios
 */
class ModuleAbstractFactory implements AbstractFactoryInterface
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
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return object|void
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var array $defaultOptions */
        $defaultOptions = $container->get('config')[$requestedName];

        /** @var array $options */
        $options = is_null($options)
            ? $defaultOptions : ArrayUtils::merge($defaultOptions, $options);

        return $options;
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
