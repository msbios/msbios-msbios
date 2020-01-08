<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios;

/** @var ConfigProvider $configProvider */
$configProvider = new ConfigProvider;

return [
    'service_manager' => $configProvider->getDependencyConfig(),
    'listeners' => $configProvider->getListenersConfig(),
];