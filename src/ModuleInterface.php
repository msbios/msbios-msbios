<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

/**
 * Interface ModuleInterface
 * @package MSBios
 * @deprecated use ModuleAwareInterface with Trait
 */
interface ModuleInterface extends ConfigProviderInterface
{

}
