<?php

namespace ContainerBUx4xqx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ALD1qaUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aLD1qaU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aLD1qaU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ArticleController::delete' => ['privates', '.service_locator.Bag_SHO', 'get_ServiceLocator_BagSHOService', true],
            'App\\Controller\\ArticleController::edit' => ['privates', '.service_locator.Bag_SHO', 'get_ServiceLocator_BagSHOService', true],
            'App\\Controller\\ArticleController::index' => ['privates', '.service_locator.Zr91eP6', 'get_ServiceLocator_Zr91eP6Service', true],
            'App\\Controller\\ArticleController::show' => ['privates', '.service_locator.Bag_SHO', 'get_ServiceLocator_BagSHOService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.iNa3IJi', 'get_ServiceLocator_INa3IJiService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\ArticleController:delete' => ['privates', '.service_locator.Bag_SHO', 'get_ServiceLocator_BagSHOService', true],
            'App\\Controller\\ArticleController:edit' => ['privates', '.service_locator.Bag_SHO', 'get_ServiceLocator_BagSHOService', true],
            'App\\Controller\\ArticleController:index' => ['privates', '.service_locator.Zr91eP6', 'get_ServiceLocator_Zr91eP6Service', true],
            'App\\Controller\\ArticleController:show' => ['privates', '.service_locator.Bag_SHO', 'get_ServiceLocator_BagSHOService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.iNa3IJi', 'get_ServiceLocator_INa3IJiService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\ArticleController::delete' => '?',
            'App\\Controller\\ArticleController::edit' => '?',
            'App\\Controller\\ArticleController::index' => '?',
            'App\\Controller\\ArticleController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ArticleController:delete' => '?',
            'App\\Controller\\ArticleController:edit' => '?',
            'App\\Controller\\ArticleController:index' => '?',
            'App\\Controller\\ArticleController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
