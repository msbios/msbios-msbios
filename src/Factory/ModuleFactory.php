<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Factory;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Laminas\Stdlib\ArrayUtils;

/**
 * Class ModuleFactory
 * @package MSBios\Factory
 */
class ModuleFactory implements FactoryInterface
{
    /**
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return array|object
     * @deprecated this logic moved to AbstractFactory
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var array $defaultOptions */
        $defaultOptions = $container->get('config')[$requestedName];

        return is_null($options)
            ? $defaultOptions : ArrayUtils::merge($defaultOptions, $options);
    }
}
