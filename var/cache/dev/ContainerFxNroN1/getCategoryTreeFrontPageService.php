<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Utils\CategoryTreeFrontPage' shared autowired service.

include_once $this->targetDirs[3].'\\src\\Utils\\AbstractClasses\\CategoryTreeAbstract.php';
include_once $this->targetDirs[3].'\\src\\Utils\\CategoryTreeFrontPage.php';

return $this->privates['App\\Utils\\CategoryTreeFrontPage'] = new \App\Utils\CategoryTreeFrontPage(($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')), ($this->services['router'] ?? $this->getRouterService()));
