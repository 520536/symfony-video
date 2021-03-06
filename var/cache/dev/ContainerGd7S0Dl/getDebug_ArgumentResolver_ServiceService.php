<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.argument_resolver.service' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\ServiceValueResolver.php';

return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Controller\\Admin\\MainController::index' => ['privates', '.service_locator.kGufH0Y', 'get_ServiceLocator_KGufH0YService.php', true],
    'App\\Controller\\Admin\\MainController::videos' => ['privates', '.service_locator.a4SmuDm', 'get_ServiceLocator_A4SmuDmService.php', true],
    'App\\Controller\\Admin\\Superadmin\\CategoriesController::categories' => ['privates', '.service_locator.XhFqX8r', 'get_ServiceLocator_XhFqX8rService.php', true],
    'App\\Controller\\Admin\\Superadmin\\CategoriesController::deleteCategory' => ['privates', '.service_locator..JzDQIR', 'get_ServiceLocator__JzDQIRService.php', true],
    'App\\Controller\\Admin\\Superadmin\\CategoriesController::editCategory' => ['privates', '.service_locator..JzDQIR', 'get_ServiceLocator__JzDQIRService.php', true],
    'App\\Controller\\Admin\\Superadmin\\CategoriesController::getAllCategories' => ['privates', '.service_locator.a4SmuDm', 'get_ServiceLocator_A4SmuDmService.php', true],
    'App\\Controller\\Admin\\Superadmin\\SuperAdminController::deleteUser' => ['privates', '.service_locator.wypGnUQ', 'get_ServiceLocator_WypGnUQService.php', true],
    'App\\Controller\\Admin\\Superadmin\\SuperAdminController::deleteVideo' => ['privates', '.service_locator.JZ_2X5D', 'get_ServiceLocator_JZ2X5DService.php', true],
    'App\\Controller\\Admin\\Superadmin\\SuperAdminController::updateVideoCategory' => ['privates', '.service_locator.XxOaJfn', 'get_ServiceLocator_XxOaJfnService.php', true],
    'App\\Controller\\Admin\\Superadmin\\SuperAdminController::uploadVideoLocally' => ['privates', '.service_locator.tTAZA1Q', 'get_ServiceLocator_TTAZA1QService.php', true],
    'App\\Controller\\FrontController::newComment' => ['privates', '.service_locator.XxOaJfn', 'get_ServiceLocator_XxOaJfnService.php', true],
    'App\\Controller\\FrontController::searchResults' => ['privates', '.service_locator.I.ArnNt', 'get_ServiceLocator_I_ArnNtService.php', true],
    'App\\Controller\\FrontController::toggleLikesAjax' => ['privates', '.service_locator.XxOaJfn', 'get_ServiceLocator_XxOaJfnService.php', true],
    'App\\Controller\\FrontController::videoDetails' => ['privates', '.service_locator.bKAxWeC', 'get_ServiceLocator_BKAxWeCService.php', true],
    'App\\Controller\\FrontController::videoList' => ['privates', '.service_locator.Osq_DpP', 'get_ServiceLocator_OsqDpPService.php', true],
    'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.DmTkD_n', 'get_ServiceLocator_DmTkDNService.php', true],
    'App\\Controller\\SecurityController::register' => ['privates', '.service_locator.8BVRyEJ', 'get_ServiceLocator_8BVRyEJService.php', true],
    'App\\Controller\\SubscriptionController::payment' => ['privates', '.service_locator.3hxx.mU', 'get_ServiceLocator_3hxx_MUService.php', true],
    'App\\Controller\\Admin\\MainController:index' => ['privates', '.service_locator.kGufH0Y', 'get_ServiceLocator_KGufH0YService.php', true],
    'App\\Controller\\Admin\\MainController:videos' => ['privates', '.service_locator.a4SmuDm', 'get_ServiceLocator_A4SmuDmService.php', true],
    'App\\Controller\\Admin\\Superadmin\\CategoriesController:categories' => ['privates', '.service_locator.XhFqX8r', 'get_ServiceLocator_XhFqX8rService.php', true],
    'App\\Controller\\Admin\\Superadmin\\CategoriesController:deleteCategory' => ['privates', '.service_locator..JzDQIR', 'get_ServiceLocator__JzDQIRService.php', true],
    'App\\Controller\\Admin\\Superadmin\\CategoriesController:editCategory' => ['privates', '.service_locator..JzDQIR', 'get_ServiceLocator__JzDQIRService.php', true],
    'App\\Controller\\Admin\\Superadmin\\CategoriesController:getAllCategories' => ['privates', '.service_locator.a4SmuDm', 'get_ServiceLocator_A4SmuDmService.php', true],
    'App\\Controller\\Admin\\Superadmin\\SuperAdminController:deleteUser' => ['privates', '.service_locator.wypGnUQ', 'get_ServiceLocator_WypGnUQService.php', true],
    'App\\Controller\\Admin\\Superadmin\\SuperAdminController:deleteVideo' => ['privates', '.service_locator.JZ_2X5D', 'get_ServiceLocator_JZ2X5DService.php', true],
    'App\\Controller\\Admin\\Superadmin\\SuperAdminController:updateVideoCategory' => ['privates', '.service_locator.XxOaJfn', 'get_ServiceLocator_XxOaJfnService.php', true],
    'App\\Controller\\Admin\\Superadmin\\SuperAdminController:uploadVideoLocally' => ['privates', '.service_locator.tTAZA1Q', 'get_ServiceLocator_TTAZA1QService.php', true],
    'App\\Controller\\FrontController:newComment' => ['privates', '.service_locator.XxOaJfn', 'get_ServiceLocator_XxOaJfnService.php', true],
    'App\\Controller\\FrontController:searchResults' => ['privates', '.service_locator.I.ArnNt', 'get_ServiceLocator_I_ArnNtService.php', true],
    'App\\Controller\\FrontController:toggleLikesAjax' => ['privates', '.service_locator.XxOaJfn', 'get_ServiceLocator_XxOaJfnService.php', true],
    'App\\Controller\\FrontController:videoDetails' => ['privates', '.service_locator.bKAxWeC', 'get_ServiceLocator_BKAxWeCService.php', true],
    'App\\Controller\\FrontController:videoList' => ['privates', '.service_locator.Osq_DpP', 'get_ServiceLocator_OsqDpPService.php', true],
    'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.DmTkD_n', 'get_ServiceLocator_DmTkDNService.php', true],
    'App\\Controller\\SecurityController:register' => ['privates', '.service_locator.8BVRyEJ', 'get_ServiceLocator_8BVRyEJService.php', true],
    'App\\Controller\\SubscriptionController:payment' => ['privates', '.service_locator.3hxx.mU', 'get_ServiceLocator_3hxx_MUService.php', true],
])), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
