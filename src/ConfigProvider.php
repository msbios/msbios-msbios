<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios;

use Zend\ServiceManager\Factory\InvokableFactory;

/**
 * Class ConfigProvider
 *
 * Provide base configuration for using the component.
 *
 * @package MSBios
 */
class ConfigProvider
{
    /** @const SERVICE_MANAGER  */
    const SERVICE_MANAGER = 'service_manager';

    /** @const ROUTE_MANAGER  */
    const ROUTE_MANAGER = 'route_manager';

    /** @const ROUTER  */
    const ROUTER = 'router';

    /** @const LISTENERS  */
    const LISTENERS = 'listeners';

    /**
     * Provide default configuration.
     *
     * @return array
     */
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencyConfig(),
        ];
    }

    /**
     * Provide default container dependency configuration.
     *
     * @return array
     */
    public function getDependencyConfig(): array
    {
        return [
            'abstract_factories' => [
                ModuleAbstractFactory::class =>
                    new ModuleAbstractFactory
            ],
            'factories' => [
                ListenerAggregate::class =>
                    InvokableFactory::class
            ]
        ];
    }
}