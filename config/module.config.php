<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios;

use Zend\ServiceManager\Factory\InvokableFactory;

return [

    'service_manager' => [
        'abstract_factories' => [
            ModuleAbstractFactory::class =>
                new ModuleAbstractFactory
        ],
        'factories' => [
            ListenerAggregate::class =>
                InvokableFactory::class
        ]
    ],

    Module::class => [
        // ...
    ],

    'listeners' => [
        ListenerAggregate::class
    ]
];