<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.XxOaJfn' shared service.

return $this->privates['.service_locator.XxOaJfn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'video' => ['privates', '.errored..service_locator.XxOaJfn.App\\Entity\\Video', NULL, 'Cannot autowire service ".service_locator.XxOaJfn": it references class "App\\Entity\\Video" but no such service exists.'],
]);
