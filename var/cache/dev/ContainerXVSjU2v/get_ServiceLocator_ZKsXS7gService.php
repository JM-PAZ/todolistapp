<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.zKsXS7g' shared service.

return $this->privates['.service_locator.zKsXS7g'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'actividade' => ['privates', '.errored..service_locator.zKsXS7g.App\\Entity\\Actividades', NULL, 'Cannot autowire service ".service_locator.zKsXS7g": it references class "App\\Entity\\Actividades" but no such service exists.'],
], [
    'actividade' => 'App\\Entity\\Actividades',
]);