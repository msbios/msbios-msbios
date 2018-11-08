<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios;

/**
 * Trait ModuleAwareTrait
 * @package MSBios
 */
trait ModuleAwareTrait
{
    /**
     * @inheritdoc
     *
     * @return mixed
     */
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
