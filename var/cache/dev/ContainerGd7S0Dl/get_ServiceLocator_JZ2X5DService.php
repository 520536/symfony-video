<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.JZ_2X5D' shared service.

return $this->privates['.service_locator.JZ_2X5D'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'fileUploader' => ['privates', 'App\\Utils\\LocalUploader', 'getLocalUploaderService.php', true],
    'video' => ['privates', '.errored..service_locator.JZ_2X5D.App\\Entity\\Video', NULL, 'Cannot autowire service ".service_locator.JZ_2X5D": it references class "App\\Entity\\Video" but no such service exists.'],
]);
