<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.a4SmuDm' shared service.

return $this->privates['.service_locator.a4SmuDm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'categories' => ['privates', 'App\\Utils\\CategoryTreeAdminOptionList', 'getCategoryTreeAdminOptionListService.php', true],
]);