<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios;

use Laminas\Loader\AutoloaderFactory;
use Laminas\Loader\StandardAutoloader;
use Laminas\ModuleManager\Feature\AutoloaderProviderInterface;

/**
 * Class Module
 * @package MSBios
 */
class Module implements ModuleInterface, AutoloaderProviderInterface
{
    /** @const VERSION */
    const VERSION = '2.0.0';

    /**
     * @return string
     */
    protected function getDir(): string
    {
        return __DIR__;
    }

    /**
     * @return string
     */
    protected function getNamespace(): string
    {
        return __NAMESPACE__;
    }

    /**
     * @inheritdoc
     *
     * @return array|mixed|\Traversable
     */
    public function getConfig()
    {
        /** @var string $filename */
        $filename = $this->getDir() . '/../config/module.config.php';
        return file_exists($filename) ? include $filename : [];
    }

    /**
     * @inheritdoc
     *
     * @return array
     */
    public function getAutoloaderConfig(): array
    {
        return [
            AutoloaderFactory::STANDARD_AUTOLOADER => [
                StandardAutoloader::LOAD_NS => [
                    $this->getNamespace() => $this->getDir(),
                ],
            ],
        ];
    }
}
