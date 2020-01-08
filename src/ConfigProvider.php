<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios;

use MSBios\Factory\ModuleAbstractFactory;
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

    /**
     * Provide default listeners configuration.
     *
     * @return array
     */
    public function getListenersConfig(): array
    {
        return [
            ListenerAggregate::class =>
                ListenerAggregate::class
        ];
    }
}