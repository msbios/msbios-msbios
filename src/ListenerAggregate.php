<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios;

use Laminas\EventManager\AbstractListenerAggregate;
use Laminas\EventManager\EventInterface;
use Laminas\EventManager\EventManagerInterface;
use Laminas\Mvc\MvcEvent;
use Symfony\Component\Dotenv\Dotenv;

/**
 * Class ListenerAggregate
 * @package MSBios
 */
class ListenerAggregate extends AbstractListenerAggregate
{
    /**
     * @inheritdoc
     *
     * @param EventManagerInterface $events
     * @param int $priority
     */
    public function attach(EventManagerInterface $events, $priority = 1): void
    {
        $this->listeners[] = $events
            ->attach(MvcEvent::EVENT_BOOTSTRAP, [$this, 'onBootstrap'], $priority);
    }

    /**
     * @param EventInterface $event
     */
    public function onBootstrap(EventInterface $event): void
    {
        if (file_exists('.env')) {
            (new Dotenv)->load('.env');
        }
    }
}