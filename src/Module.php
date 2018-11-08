<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios;

/**
 * Class Module
 * @package MSBios
 */
class Module implements ModuleInterface, ModuleAwareInterface, AutoloaderAwareInterface
{
    /** @const VERSION */
    const VERSION = '1.0.8';

    use ModuleAwareTrait;
    use AutoloaderAwareTrait;
}
