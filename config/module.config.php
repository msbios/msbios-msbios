<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios;

return [

    'service_manager' => [
        'abstract_factories' => [
            ModuleAbstractFactory::class =>
                new ModuleAbstractFactory
        ]
    ],

    Module::class => [
        // ...
    ]
];