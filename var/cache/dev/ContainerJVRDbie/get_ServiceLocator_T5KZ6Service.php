<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator._T5_KZ6' shared service.

return $this->privates['.service_locator._T5_KZ6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService.php', true],
    'repo' => ['privates', 'App\\Repository\\TransactionRepository', 'getTransactionRepositoryService.php', true],
    'user' => ['privates', '.errored..service_locator._T5_KZ6.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator._T5_KZ6": it references class "App\\Entity\\User" but no such service exists.'],
]);