<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.y7TRabD' shared service.

return $this->privates['.service_locator.y7TRabD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'Chauffeur' => ['privates', 'App\\Repository\\ChauffeurRepository', 'getChauffeurRepositoryService.php', true],
    'Lieux' => ['privates', 'App\\Repository\\LieuxRepository', 'getLieuxRepositoryService.php', true],
    'Vehicule' => ['privates', 'App\\Repository\\VehiculeRepository', 'getVehiculeRepositoryService.php', true],
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService.php', true],
    'reservation' => ['privates', '.errored..service_locator.y7TRabD.App\\Entity\\Reservation', NULL, 'Cannot autowire service ".service_locator.y7TRabD": it references class "App\\Entity\\Reservation" but no such service exists.'],
]);
