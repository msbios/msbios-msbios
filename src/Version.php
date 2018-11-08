<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios;

/**
 * Class Version
 *
 * @package MSBios
 * @deprecated Use Module::VERSION
 */
abstract class Version
{
    /** @const VERSION */
    const VERSION = Module::VERSION;
}
