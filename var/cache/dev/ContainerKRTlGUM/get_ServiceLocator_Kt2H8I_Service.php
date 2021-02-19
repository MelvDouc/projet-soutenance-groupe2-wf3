<?php

namespace ContainerKRTlGUM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Kt2H8I_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kt2H8I.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kt2H8I.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'logementRepository' => ['privates', 'App\\Repository\\LogementRepository', 'getLogementRepositoryService', true],
        ], [
            'logementRepository' => 'App\\Repository\\LogementRepository',
        ]);
    }
}
